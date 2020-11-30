<?php

namespace App\View\Components\Users;

use Illuminate\View\Component;

class ViewProfile extends Component
{
    public $pageTitle = "Your Profile";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.users.view-profile');
    }
}
