<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;

class Properties extends Component
{
    public $action = 'properties.index';
    public $name, $description, $location, $remarks, $date_acquired, $unit_of_measure_id, $quantity, $value, $added_by, $currentPropertyId;
    public $departments = [];

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'location' => 'required|string',
        'remarks' => 'nullable|string',
        'date_acquired' => 'nullable|date',
        'unit_of_measure_id' => 'required|numeric',
        'quantity' => 'required|numeric',
        'value' => 'required|numeric',
        'departments' => 'required|array',
        'departments.*' => 'required|numeric',
    ];

    public function render()
    {
        return view('livewire.properties');
    }

    public function edit(int $id)
    {
        $this->currentPropertyId = $id;

        $property = Property::findOrFail($id);
        $this->name = $property->name;
        $this->description = $property->description;
        $this->location = $property->location;
        $this->remarks = $property->remarks;
        $this->date_acquired = $property->date_acquired;
        $this->unit_of_measure_id = $property->unit_of_measure_id;
        $this->quantity = $property->quantity;
        $this->value = $property->value;

        $this->departments = $property->departments->pluck('id')->toArray();
        $this->departments = array_map("strval", $this->departments);

        $this->emit("hideFeedback");
        $this->action = "properties.edit";
    }

    public function delete(int $id)
    {
        $this->currentPropertyId = $id;

        $this->name = Property::findOrFail($id)->name;
        $this->emit("hideFeedback");
        $this->action = "properties.delete";
    }

    public function show(int $id)
    {
        $this->currentPropertyId = $id;
        $this->emit("hideFeedback");
        $this->action = "properties.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "properties.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "properties.create";
    }

    public function saveProperty()
    {
        $this->validate();

        $property = Property::create([
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'remarks' => $this->remarks,
            'date_acquired' => $this->date_acquired,
            'unit_of_measure_id' => $this->unit_of_measure_id,
            'quantity' => $this->quantity,
            'value' => $this->value,
            'added_by' => auth()->user()->id,
        ]);

        $property->departments()->sync($this->departments);

        $this->action = 'properties.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Property added successfully");
    }

    public function destroyCurrentProperty()
    {
        Property::destroy($this->currentPropertyId);

        $this->action = 'properties.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Property deleted successfully");
    }


    public function updateProperty()
    {
        $this->validate();

        $property = Property::find($this->currentPropertyId);
        $property->update([
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'remarks' => $this->remarks,
            'date_acquired' => $this->date_acquired,
            'unit_of_measure_id' => $this->unit_of_measure_id,
            'quantity' => $this->quantity,
            'value' => $this->value,
        ]);


        $property->departments()->sync($this->departments);

        $this->action = 'properties.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Property updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->name =  $this->description =  $this->location =  $this->remarks =  $this->date_acquired =  $this->unit_of_measure_id =  $this->quantity =  $this->value =  $this->added_by =  $this->currentPropertyId = null;
        $this->departments = [];
    }
}
