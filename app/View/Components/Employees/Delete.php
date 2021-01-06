<?php

namespace App\View\Components\Employees;

use Illuminate\View\Component;

class Delete extends Component
{
    public $employeeName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $employeeName)
    {
        $this->employeeName = $employeeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.employees.delete');
    }
}
