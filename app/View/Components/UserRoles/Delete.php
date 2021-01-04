<?php

namespace App\View\Components\UserRoles;

use Illuminate\View\Component;

class Delete extends Component
{
    public $userRoleTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $userRoleTitle)
    {
        $this->userRoleTitle = $userRoleTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-roles.delete');
    }
}
