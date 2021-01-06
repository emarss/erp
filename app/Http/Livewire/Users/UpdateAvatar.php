<?php

namespace App\Http\Livewire\Users;

use App\Models\UserProfile;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class UpdateAvatar extends Component
{
    use WithFileUploads;

    public $avatar;

    public function render()
    {
        return view('livewire.users.update-avatar');
    }

    public function uploadAvatar()
    {
        $this->validate([
            'avatar' => 'required|image'
        ]);
        $image = Image::make($this->avatar->getRealPath());
        $dimension = 400;
        $image->width() > $image->height() ? $dimension=$image->height() : $dimension=$image->width();
        $image->crop($dimension, $dimension)->resize(200, 200);

        $avatarName = "users/avatars/" . auth()->user()->id . ".png";

        if($image->save($avatarName , 80)){
            $this->emit('avatarUploaded');
            $this->updateUserAvatar($avatarName);
        }else{
            $this->emit('avatarNotUploaded');
        }
    }

    public function updateUserAvatar($avatarName)
    {
        UserProfile::where('user_id', auth()->user()->id)->first()->update(['avatar' => $avatarName]);
    }
}
