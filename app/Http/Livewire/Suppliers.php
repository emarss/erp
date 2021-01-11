<?php

namespace App\Http\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class Suppliers extends Component
{
    public $action = 'suppliers.index';
    public $name, $remarks, $email, $phone, $address, $city, $country, $added_by, $supplierName, $currentSupplierId;

    protected $rules = [
        'name' => "required|string",
        'remarks' => "nullable|string",
        'email' => "nullable|string",
        'phone' => "nullable|string",
        'address' => "nullable|string",
        'city' => "nullable|string",
        'country' => "nullable|string",
    ];

    public function render()
    {
        return view('livewire.suppliers');
    }

    public function edit(int $id)
    {
        $this->currentSupplierId = $id;

        $supplier = Supplier::findOrFail($id);
        $this->name = $supplier->name;
        $this->remarks = $supplier->remarks;
        $this->email = $supplier->email;
        $this->phone = $supplier->phone;
        $this->address = $supplier->address;
        $this->city = $supplier->city;
        $this->country = $supplier->country;


        $this->emit("hideFeedback");
        $this->action = "suppliers.edit";
    }

    public function delete(int $id)
    {
        $this->currentSupplierId = $id;

        $this->supplierName = Supplier::findOrFail($id)->name;
        $this->emit("hideFeedback");
        $this->action = "suppliers.delete";
    }

    public function show(int $id)
    {
        $this->currentSupplierId = $id;
        $this->emit("hideFeedback");
        $this->action = "suppliers.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "suppliers.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "suppliers.create";
    }

    public function saveSupplier()
    {
        $this->validate();

        $supplier = Supplier::create([
            'name' => $this->name,
            'remarks' => $this->remarks,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
            'department_id' => session('department')->id,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'suppliers.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Supplier added successfully");
    }

    public function destroyCurrentSupplier()
    {
        Supplier::destroy($this->currentSupplierId);

        $this->action = 'suppliers.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Supplier deleted successfully");
    }


    public function updateSupplier()
    {
        $this->validate();

        $supplier = Supplier::find($this->currentSupplierId);
        $supplier->update([
            'name' => $this->name,
            'remarks' => $this->remarks,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
        ]);

        $this->action = 'suppliers.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Supplier updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->name = $this->remarks = $this->email = $this->phone = $this->address = $this->city = $this->country = $this->added_by = $this->supplierName = $this->currentSupplierId = null;
    }
}
