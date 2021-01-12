<?php

namespace App\Http\Livewire;

use App\Models\ReceivedProduct;
use App\Models\Stock;
use Livewire\Component;

class ReceivedProducts extends Component
{
    public $action = 'received-products.index';
    public $date, $stock_id, $supplier_id, $remarks, $added_by, $productDescription, $currentReceivedProductId, $product;
    public $unit_selling_price = 0, $quantity = 1, $total_value = 0;

    protected $rules = [
        'date' => "required|date",
        'remarks' => "nullable|string",
        'stock_id' => "required|numeric|min:0",
        'supplier_id' => "required|numeric|min:0",
        'quantity' => "required|numeric|min:1",
        'unit_selling_price' => "required|numeric|min:0",
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);

        switch ($field) {
            case 'stock_id':
                $this->product = Stock::find($this->stock_id);
                if($this->product != null){
                    $this->unit_selling_price = Stock::find($this->stock_id)->unit_selling_price;
                    $this->total_value = $this->unit_selling_price * $this->quantity;
                }else{
                    $this->unit_selling_price = 0;
                    $this->total_value = 0;
                }
                break;

            case 'quantity':
                $this->total_value = $this->unit_selling_price * $this->quantity;
                break;

            default:
                break;
        }
    }


    public function render()
    {
        return view('livewire.received-products');
    }

    public function edit(int $id)
    {
        $this->currentReceivedProductId = $id;

        $receivedProduct = ReceivedProduct::findOrFail($id);
        $this->date = $receivedProduct->date;
        $this->quantity = $receivedProduct->quantity;
        $this->stock_id = $receivedProduct->stock_id;
        $this->unit_selling_price = $receivedProduct->unit_selling_price;
        $this->supplier_id = $receivedProduct->supplier_id;
        $this->remarks = $receivedProduct->remarks;

        $this->total_value = $receivedProduct->unit_selling_price * $this->quantity;

        $this->emit("hideFeedback");
        $this->action = "received-products.edit";
    }

    public function delete(int $id)
    {
        $this->currentReceivedProductId = $id;

        $this->productDescription = ReceivedProduct::findOrFail($id)->product->description;
        $this->emit("hideFeedback");
        $this->action = "received-products.delete";
    }

    public function show(int $id)
    {
        $this->currentReceivedProductId = $id;
        $this->emit("hideFeedback");
        $this->action = "received-products.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "received-products.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "received-products.create";
    }

    public function saveReceivedProduct()
    {
        $this->validate();

        $receivedProduct = ReceivedProduct::create([
            'date' => $this->date,
            'quantity' => $this->quantity,
            'stock_id' => $this->stock_id,
            'unit_selling_price' => $this->unit_selling_price,
            'supplier_id' => $this->supplier_id,
            'remarks' => $this->remarks,
            'department_id' => session('department')->id,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'received-products.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Received Product added successfully");
    }

    public function destroyCurrentReceivedProduct()
    {
        ReceivedProduct::destroy($this->currentReceivedProductId);

        $this->action = 'received-products.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Received Product deleted successfully");
    }


    public function updateReceivedProduct()
    {
        $this->validate();

        $receivedProduct = ReceivedProduct::find($this->currentReceivedProductId);
        $receivedProduct->update([
            'date' => $this->date,
            'quantity' => $this->quantity,
            'stock_id' => $this->stock_id,
            'unit_selling_price' => $this->unit_selling_price,
            'supplier_id' => $this->supplier_id,
            'remarks' => $this->remarks,
        ]);

        $this->action = 'received-products.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Received Product updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->receivedProductName = $this->added_by = $this->date = $this->remarks = $this->stock_id = $this->product = $this->supplier_id = $this->currentReceivedProductId = null;
        $this->unit_selling_price = $this->total_value = 0;
        $this->quantity = 1;
    }

}
