<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class UpdateNationalId extends Component
{
    use WithFileUploads;

    public $nationalIdImage, $client;

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.clients.update-national-id');
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


        $nationalIdImageName = "clients/national_id_images/" . auth()->user()->id . ".png";

        if($image->save($nationalIdImageName , 80)){
            $this->emit('nationalIdImageUploaded');
            $this->updateClientNationalIdImage($nationalIdImageName);
        }else{
            $this->emit('nationalIdImageNotUploaded');
        }
    }

    public function updateClientNationalIdImage($nationalIdImageName)
    {
        $this->client->update(['national_id_image' => $nationalIdImageName]);
    }
}
