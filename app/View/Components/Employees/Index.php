<?php

namespace App\View\Components\Employees;

use App\Models\Employee;
use Illuminate\View\Component;

class Index extends Component
{
    public $employees;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->employees = Employee::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.employees.index');
    }
}
