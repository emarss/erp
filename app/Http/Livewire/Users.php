<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Str;

class Users extends Component
{
    public $action = 'users.index';
    public $first_name, $last_name, $middle_name, $password, $password_confirmation, $role, $email, $currentUserId;
    public $departments = [];

    public function render()
    {
        return view('livewire.users');
    }

    public function edit(int $id)
    {
        $this->currentUserId = $id;

        $user = User::findOrFail($id);

        $this->first_name = $user->first_name;
        $this->middle_name = $user->middle_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->departments = $user->departments->pluck('id')->toArray();
        $this->departments = array_map("strval", $this->departments);

        $this->emit("hideFeedback");
        $this->action = "users.edit";
    }

    public function delete(int $id)
    {
        $this->currentUserId = $id;

        $this->first_name = User::findOrFail($id)->first_name;
        $this->emit("hideFeedback");
        $this->action = "users.delete";
    }

    public function show(int $id)
    {
        $this->currentUserId = $id;
        $this->emit("hideFeedback");
        $this->action = "users.show";
    }

    public function changeUserPassword(int $id)
    {
        $this->currentUserId = $id;
        $this->emit("hideFeedback");
        $this->action = "users.change-password";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "users.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "users.create";
    }

    public function saveUser()
    {
        $this->validate([
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string', //only nullable
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
            'departments' => 'required|array|min:1',
            'departments.*' => 'numeric|min:1',
        ]);

        $user = User::create([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'status' => true,
            'added_by' => auth()->user()->id,
        ]);

        UserProfile::create([
            'user_id' => $user->id,
        ]);

        $user->departments()->sync($this->departments);

        $this->action = 'users.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User added successfully");
    }

    public function destroyCurrentUser()
    {
        User::destroy($this->currentUserId);
        $this->action = 'users.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User deleted successfully");
    }


    public function updateUser()
    {
        $this->validate([
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string', //only nullable
            'last_name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|string',
            'departments' => 'required|array|min:1',
            'departments.*' => 'numeric|min:1',
        ]);

        $user = User::find($this->currentUserId);
        $user->update([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'role' => $this->role,
            'status' => true,
        ]);

        $user->departments()->sync($this->departments);

        $this->action = 'users.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User updated successfully");
    }


    public function updateUserPassword()
    {
        $this->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::find($this->currentUserId);
        $user->update([
            'password' => Hash::make($this->password),
        ]);

        $user->departments()->sync($this->departments);

        $this->action = 'users.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Password for $user->first_name updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->first_name = $this->last_name = $this->middle_name = $this->password = $this->role = $this->email = $this->currentUserId = null;
        $this->departments = [];
    }
}
