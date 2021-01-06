<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class UpdateNationalId extends Component
{

    use WithFileUploads;

    public $nationalIdImage, $employee;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.employees.update-national-id');
    }


    public function uploadNationalIdImage()
    {
        $this->validate([
            'nationalIdImage' => 'required|image'
        ]);
        $image = Image::make($this->nationalIdImage->getRealPath());
        $image->resize(null, 400, function ($constraint) {
            $constraint->aspectRatio();
        });


        $nationalIdImageName = "employees/national_id_images/" . auth()->user()->id . ".png";

        if($image->save($nationalIdImageName , 80)){
            $this->emit('nationalIdImageUploaded');
            $this->updateEmployeeNationalIdImage($nationalIdImageName);
        }else{
            $this->emit('nationalIdImageNotUploaded');
        }
    }

    public function updateEmployeeNationalIdImage($nationalIdImageName)
    {
        $this->employee->update(['national_id_image' => $nationalIdImageName]);
    }

}
