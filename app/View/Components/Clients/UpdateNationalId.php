<?php

namespace App\View\Components\Clients;

use App\Models\Client;
use Illuminate\View\Component;

class UpdateNationalId extends Component
{
    public $client;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentClientId)
    {
        $this->client = Client::findOrFail($currentClientId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.clients.update-national-id');
    }
}
