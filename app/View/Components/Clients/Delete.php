<?php

namespace App\View\Components\Clients;

use Illuminate\View\Component;

class Delete extends Component
{
    public $clientName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $clientName)
    {
        $this->clientName = $clientName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.clients.delete');
    }
}
