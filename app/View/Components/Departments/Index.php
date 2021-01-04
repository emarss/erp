<?php

namespace App\View\Components\Departments;

use App\Models\Department;
use Illuminate\View\Component;

class Index extends Component
{
    public $departments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->departments = Department::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.departments.index');
    }
}
