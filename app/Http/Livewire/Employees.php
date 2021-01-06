<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class Employees extends Component
{
    public $action = 'employees.index';
    public $currentEmployeeId;
    public $first_name, $middle_name, $last_name, $position, $status, $email, $national_id, $phone, $next_of_kin, $address, $sex, $employment_history, $engagement_date, $termination_date, $added_by;
    public $departments = [];

    protected $listeners = [
        'contractFileUploaded' => 'contractFileUploaded',
        'contractNotFileUploaded' => 'contractNotFileUploaded',
        'nationalIdImageUploaded' => 'nationalIdImageUploaded',
        'nationalIdImageNotUploaded' => 'nationalIdImageNotUploaded',
    ];


    protected $rules = [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'position' => 'required|string',
            'status' => 'required|boolean',
            'email' => 'nullable|string',
            'national_id' => 'nullable|string',
            'phone' => 'nullable|string',
            'next_of_kin' => 'nullable|string',
            'address' => 'nullable|string',
            'sex' => 'nullable|string',
            'employment_history' => 'nullable|string',
            'engagement_date' => 'nullable|date',
            'termination_date' => 'nullable|date',
        ];

    public function render()
    {
        return view('livewire.employees');
    }



    public function changeContract()
    {
        $this->emit("hideFeedback");
    	$this->action = 'employees.update-contract';
    }


    public function changeNationalIdImage()
    {
        $this->emit("hideFeedback");
    	$this->action = 'employees.update-national-id';
    }


    public function edit(int $id)
    {
        $this->currentEmployeeId = $id;

        $employee = Employee::findOrFail($id);

        $this->first_name = $employee->first_name ;
        $this->middle_name = $employee->middle_name ;
        $this->last_name = $employee->last_name ;
        $this->position = $employee->position ;
        $this->status = $employee->status ;
        $this->email = $employee->email ;
        $this->national_id = $employee->national_id ;
        $this->phone = $employee->phone ;
        $this->next_of_kin = $employee->next_of_kin ;
        $this->address = $employee->address ;
        $this->sex = $employee->sex ;
        $this->employment_history = $employee->employment_history ;
        $this->engagement_date = $employee->engagement_date ;
        $this->termination_date = $employee->termination_date ;

        $this->departments = $employee->departments->pluck('id')->toArray();
        $this->departments = array_map("strval", $this->departments);

        $this->emit("hideFeedback");
        $this->action = "employees.edit";
    }

    public function delete(int $id)
    {
        $this->currentEmployeeId = $id;

        $this->first_name = Employee::findOrFail($id)->first_name;
        $this->emit("hideFeedback");
        $this->action = "employees.delete";
    }

    public function show(int $id)
    {
        $this->currentEmployeeId = $id;
        $this->emit("hideFeedback");
        $this->action = "employees.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "employees.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "employees.create";
    }

    public function saveEmployee()
    {
        $this->validate();

        $employee = Employee::create([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'position' => $this->position,
            'status' => $this->status,
            'email' => $this->email,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'next_of_kin' => $this->next_of_kin,
            'address' => $this->address,
            'sex' => $this->sex,
            'employment_history' => $this->employment_history,
            'engagement_date' => $this->engagement_date,
            'termination_date' => $this->termination_date,
            'added_by' => auth()->user()->id,
        ]);


        $employee->departments()->sync($this->departments);

        $this->action = 'employees.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Employee added successfully");
    }

    public function destroyCurrentEmployee()
    {
        Employee::destroy($this->currentEmployeeId);
        $this->action = 'employees.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Employee deleted successfully");
    }


    public function updateEmployee()
    {
        $this->validate();

        $employee = Employee::find($this->currentEmployeeId);
        $employee->update([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'position' => $this->position,
            'status' => $this->status,
            'email' => $this->email,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'next_of_kin' => $this->next_of_kin,
            'address' => $this->address,
            'sex' => $this->sex,
            'employment_history' => $this->employment_history,
            'engagement_date' => $this->engagement_date,
            'termination_date' => $this->termination_date,
        ]);

        $employee->departments()->sync($this->departments);

        $this->action = 'employees.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Employee updated successfully");
    }

    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->first_name = $this->middle_name = $this->last_name = $this->position = $this->email = $this->national_id = $this->phone = $this->next_of_kin = $this->address = $this->sex = $this->employment_history = $this->engagement_date = $this->termination_date = $this->national_id_image = $this->added_by = $this->contract = $this->currentEmployeeId = null;
        $this->departments = [];
    }

    public function nationalIdImageUploaded()
    {
        $this->emit('successMessage', "National Id Image updated successfully");
        $this->action = 'employees.show';
    }

    public function nationalIdImageNotUploaded()
    {
        $this->emit('errorMessage', "National Id Image updated successfully");
        $this->action = 'employees.show';
    }


    public function contractFileUploaded()
    {
        $this->emit('successMessage', "Contract File updated successfully");
        $this->action = 'employees.show';
    }

    public function contractFileNotUploaded()
    {
        $this->emit('errorMessage', "Contract File updated successfully");
        $this->action = 'employees.show';
    }
}
