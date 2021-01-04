<?php

namespace App\Http\Livewire;

use App\Models\UnitOfMeasure;
use Livewire\Component;

class UnitOfMeasures extends Component
{
    public $action = 'unit-of-measures.index';
    public $title, $description, $currentUnitOfMeasureId;

    public function render()
    {
        return view('livewire.unit-of-measures');
    }

    public function edit(int $id)
    {
        $this->currentUnitOfMeasureId = $id;

        $unitOfMeasure = UnitOfMeasure::findOrFail($id);
        $this->title = $unitOfMeasure->title;
        $this->description =  $unitOfMeasure->description;
        $this->emit("hideFeedback");
        $this->action = "unit-of-measures.edit";
    }

    public function delete(int $id)
    {
        $this->currentUnitOfMeasureId = $id;

        $this->title = UnitOfMeasure::findOrFail($id)->title;
        $this->emit("hideFeedback");
        $this->action = "unit-of-measures.delete";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "unit-of-measures.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "unit-of-measures.create";
    }

    public function saveUnitOfMeasure()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        UnitOfMeasure::create([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'unit-of-measures.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Unit Of Measure added successfully");
    }

    public function destroyCurrentUnitOfMeasure()
    {
        UnitOfMeasure::destroy($this->currentUnitOfMeasureId);
        $this->action = 'unit-of-measures.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Unit Of Measure deleted successfully");
    }


    public function updateUnitOfMeasure()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        UnitOfMeasure::find($this->currentUnitOfMeasureId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'unit-of-measures.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Unit Of Measure updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->title = $this->description = $this->currentUnitOfMeasureId = null;
    }
}
