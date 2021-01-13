<?php

namespace App\View\Components\Requisations;

use Illuminate\View\Component;

class Delete extends Component
{
    public $requisationEmployeeName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $requisationEmployeeName)
    {
        $this->requisationEmployeeName = $requisationEmployeeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.requisations.delete');
    }
}
