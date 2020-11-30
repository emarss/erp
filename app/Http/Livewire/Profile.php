<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    public $action = 'users.view-profile';
    public $first_name, $middle_name, $last_name, $email, $email_confirmation, $password, $password_confirmation, $current_password, $affiliation, $national_id, $phone, $next_of_kin, $address, $sex;


    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->middle_name = auth()->user()->middle_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->affiliation = auth()->user()->profile->affiliation;
        $this->national_id = auth()->user()->profile->national_id;
        $this->phone = auth()->user()->profile->phone;
        $this->next_of_kin = auth()->user()->profile->next_of_kin;
        $this->address = auth()->user()->profile->address;
        $this->sex = auth()->user()->profile->sex;

        $this->emit("hideFeedback");
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'first_name' => 'required|min:3',
            'middle_name' => 'min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'email_confirmation' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
            'current_password' => 'required|min:6',
        ]);
    }

    public function render()
    {
        return view('livewire.profile');
    }


    public function viewProfile()
    {
        $this->emit("hideFeedback");
    	$this->action = 'users.view-profile';
    }


    public function updateProfile()
    {
        $this->emit("hideFeedback");
    	$this->action = 'users.update-profile';
    }


    public function updateDetails()
    {
    	$this->action = 'users.update-details';
    }


    public function updatePassword()
    {
        $this->emit("hideFeedback");
    	$this->action = 'users.update-password';
    }


    public function updateEmail()
    {
        $this->emit("hideFeedback");
    	$this->action = 'users.update-email';
    }


    public function saveDetails()
    {
        User::find(auth()->user()->id)->update([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
        ]);
        $this->action = 'users.view-profile';

        $this->emit('successMessage', "Account updated successfully");
    }

    public function saveProfile()
    {
        UserProfile::where('user_id', auth()->user()->id)->update([
            'affiliation' => $this->affiliation,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'next_of_kin' => $this->next_of_kin,
            'address' => $this->address,
            'sex' => $this->sex,
        ]);
        $this->action = 'users.view-profile';

        $this->emit('successMessage', "Profile updated successfully");
    }


    public function saveEmail()
    {
        $this->validate([
            'email' => 'required|confirmed|email'
        ]);
        User::find(auth()->user()->id)->update([
            'email' => $this->email,
        ]);
        $this->action = 'users.view-profile';
        $this->emit('successMessage', "Email updated successfully");
    }

    public function savePassword()
    {
        $this->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if(!Auth::attempt($credentials)){
            $this->addError('current_password', "The current password you entered is incorrect");
            return false;
        }
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($this->password),
        ]);
        $this->action = 'users.view-profile';
        $this->emit('successMessage', "Password updated successfully");
    }
}
