<?php

namespace App\View\Components\UnitOfMeasures;

use App\Models\UnitOfMeasure;
use Illuminate\View\Component;

class Index extends Component
{
    public $unitOfMeasures;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->unitOfMeasures = UnitOfMeasure::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.unit-of-measures.index');
    }
}
