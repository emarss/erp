<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Models\UserProfile;

class UpdateNationalId extends Component
{
    use WithFileUploads;

    public $nationalIdImage;

    public function render()
    {
        return view('livewire.users.update-national-id');
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


        $nationalIdImageName = "users/national_id_images/" . auth()->user()->id . ".png";

        if($image->save($nationalIdImageName , 80)){
            $this->emit('nationalIdImageUploaded');
            $this->updateUserNationalIdImage($nationalIdImageName);
        }else{
            $this->emit('nationalIdImageNotUploaded');
        }
    }

    public function updateUserNationalIdImage($nationalIdImageName)
    {
        UserProfile::where('user_id', auth()->user()->id)->first()->update(['national_id_image' => $nationalIdImageName]);
    }
}
