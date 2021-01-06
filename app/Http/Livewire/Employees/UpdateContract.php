<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Employee;

class UpdateContract extends Component
{
    use WithFileUploads;

    public $contractFile, $employee;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.employees.update-contract');
    }


    public function uploadContractFile()
    {
        $this->validate([
            'contractFile' => 'required|file|mimes:pdf'
        ]);

        $contractFileName = auth()->user()->id . ".pdf";

        if($this->contractFile->storeAs("employees/contacts/", $contractFileName, ['disk'=> 'public'])){
            $this->emit('contractFileUploaded');
            $this->updateEmployeeContractFile($contractFileName);
        }else{
            $this->emit('contractFileNotUploaded');
        }
    }

    public function updateEmployeeContractFile($contractFileName)
    {
        $this->employee->update(['contract' => "employees/contacts/" . $contractFileName]);
    }
}
