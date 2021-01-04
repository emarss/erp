<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;
use Illuminate\Support\Str;

class Departments extends Component
{
    public $action = 'departments.index';
    public $name, $description, $currentDepartmentId;

    public function render()
    {
        return view('livewire.departments');
    }

    public function edit(int $id)
    {
        $this->currentDepartmentId = $id;

        $department = Department::findOrFail($id);
        $this->name = $department->name;
        $this->description =  $department->description;
        $this->emit("hideFeedback");
        $this->action = "departments.edit";
    }

    public function delete(int $id)
    {
        $this->currentDepartmentId = $id;

        $this->name = Department::findOrFail($id)->name;
        $this->emit("hideFeedback");
        $this->action = "departments.delete";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "departments.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "departments.create";
    }

    public function saveDepartment()
    {
        $this->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Department::create([
            'slug' => Str::slug($this->name),
            'name' => $this->name,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'departments.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Department added successfully");
    }

    public function destroyCurrentDepartment()
    {
        Department::destroy($this->currentDepartmentId);
        $this->action = 'departments.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Department deleted successfully");
    }


    public function updateDepartment()
    {
        $this->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Department::find($this->currentDepartmentId)->update([
            'slug' => Str::slug($this->name),
            'name' => $this->name,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'departments.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Department updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->name = $this->description = $this->currentDepartmentId = null;
    }
}
