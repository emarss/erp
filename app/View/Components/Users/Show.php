<?php

namespace App\View\Components\Users;

use App\Models\User;
use Illuminate\View\Component;

class Show extends Component
{
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentUserId)
    {
        $this->user = User::findOrFail($currentUserId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.users.show');
    }
}
