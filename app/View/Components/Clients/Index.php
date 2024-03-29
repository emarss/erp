<?php

namespace App\View\Components\Clients;

use App\Models\Client;
use Illuminate\View\Component;

class Index extends Component
{
    public $clients;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->clients = Client::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.clients.index');
    }
}
