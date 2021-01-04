<?php

namespace App\View\Components\Users;

use Illuminate\View\Component;

class Delete extends Component
{
    public $userName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.users.delete');
    }
}
