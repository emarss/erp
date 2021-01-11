<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class Clients extends Component
{
    public $action = 'clients.index';
    public $currentClientId;
    public $first_name, $middle_name, $last_name, $email, $national_id, $phone, $next_of_kin, $address, $sex, $added_by;

    protected $listeners = [
        'nationalIdImageUploaded' => 'nationalIdImageUploaded',
        'nationalIdImageNotUploaded' => 'nationalIdImageNotUploaded',
    ];


    protected $rules = [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email' => 'nullable|string',
            'national_id' => 'nullable|string',
            'phone' => 'nullable|string',
            'next_of_kin' => 'nullable|string',
            'address' => 'nullable|string',
            'sex' => 'nullable|string',
        ];

    public function render()
    {
        return view('livewire.clients');
    }


    public function changeNationalIdImage()
    {
        $this->emit("hideFeedback");
    	$this->action = 'clients.update-national-id';
    }


    public function edit(int $id)
    {
        $this->currentClientId = $id;

        $client = Client::findOrFail($id);

        $this->first_name = $client->first_name ;
        $this->middle_name = $client->middle_name ;
        $this->last_name = $client->last_name ;
        $this->email = $client->email ;
        $this->national_id = $client->national_id ;
        $this->phone = $client->phone ;
        $this->next_of_kin = $client->next_of_kin ;
        $this->address = $client->address ;
        $this->sex = $client->sex ;

        $this->emit("hideFeedback");
        $this->action = "clients.edit";
    }

    public function delete(int $id)
    {
        $this->currentClientId = $id;

        $this->first_name = Client::findOrFail($id)->first_name;
        $this->emit("hideFeedback");
        $this->action = "clients.delete";
    }

    public function show(int $id)
    {
        $this->currentClientId = $id;
        $this->emit("hideFeedback");
        $this->action = "clients.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "clients.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "clients.create";
    }

    public function saveClient()
    {
        $this->validate();

        $client = Client::create([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'next_of_kin' => $this->next_of_kin,
            'address' => $this->address,
            'sex' => $this->sex,
            'added_by' => auth()->user()->id,
            'department_id' => session('department')->id,
        ]);

        $this->action = 'clients.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Client added successfully");
    }

    public function destroyCurrentClient()
    {
        Client::destroy($this->currentClientId);
        $this->action = 'clients.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Client deleted successfully");
    }


    public function updateClient()
    {
        $this->validate();

        $client = Client::find($this->currentClientId);
        $client->update([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'national_id' => $this->national_id,
            'phone' => $this->phone,
            'next_of_kin' => $this->next_of_kin,
            'address' => $this->address,
            'sex' => $this->sex,
        ]);

        $this->action = 'clients.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Client updated successfully");
    }

    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->first_name = $this->middle_name = $this->last_name = $this->position = $this->email = $this->national_id = $this->phone = $this->next_of_kin = $this->address = $this->sex = $this->employment_history = $this->engagement_date = $this->termination_date = $this->national_id_image = $this->added_by = $this->contract = $this->currentClientId = null;
        $this->departments = [];
    }

    public function nationalIdImageUploaded()
    {
        $this->emit('successMessage', "National Id Image updated successfully");
        $this->action = 'clients.show';
    }

    public function nationalIdImageNotUploaded()
    {
        $this->emit('errorMessage', "National Id Image updated successfully");
        $this->action = 'clients.show';
    }
}
