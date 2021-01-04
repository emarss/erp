<?php

namespace App\Http\Livewire;

use App\Models\UserRole;
use Livewire\Component;

class UserRoles extends Component
{
    public $action = 'user-roles.index';
    public $title, $description, $currentUserRoleId;

    public function render()
    {
        return view('livewire.user-roles');
    }

    public function edit(int $id)
    {
        $this->currentUserRoleId = $id;

        $userRole = UserRole::findOrFail($id);
        $this->title = $userRole->title;
        $this->description =  $userRole->description;
        $this->emit("hideFeedback");
        $this->action = "user-roles.edit";
    }

    public function delete(int $id)
    {
        $this->currentUserRoleId = $id;

        $this->title = UserRole::findOrFail($id)->title;
        $this->emit("hideFeedback");
        $this->action = "user-roles.delete";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "user-roles.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "user-roles.create";
    }

    public function saveUserRole()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        UserRole::create([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'user-roles.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User Role added successfully");
    }

    public function destroyCurrentUserRole()
    {
        UserRole::destroy($this->currentUserRoleId);
        $this->action = 'user-roles.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User Role deleted successfully");
    }


    public function updateUserRole()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        UserRole::find($this->currentUserRoleId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'user-roles.index';
        $this->resetFormFields();

        $this->emit('successMessage', "User Role updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->title = $this->description = $this->currentUserRoleId = null;
    }
}
