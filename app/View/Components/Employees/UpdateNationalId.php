<?php

namespace App\View\Components\Employees;

use App\Models\Employee;
use Illuminate\View\Component;

class UpdateNationalId extends Component
{
    public $employee;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentEmployeeId)
    {
        $this->employee = Employee::findOrFail($currentEmployeeId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.employees.update-national-id');
    }
}
