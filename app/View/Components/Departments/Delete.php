<?php

namespace App\View\Components\Departments;

use Illuminate\View\Component;

class Delete extends Component
{
    public $departmentName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $departmentName)
    {
        $this->departmentName = $departmentName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.departments.delete');
    }
}
