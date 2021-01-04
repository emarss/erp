<?php

namespace App\View\Components\UserRoles;

use App\Models\UserRole;
use Illuminate\View\Component;

class Index extends Component
{
    public $userRoles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userRoles = UserRole::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-roles.index');
    }
}
