<?php

namespace App\View\Components\UnitOfMeasures;

use Illuminate\View\Component;

class Delete extends Component
{
    public $unitOfMeasureTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $unitOfMeasureTitle)
    {
        $this->unitOfMeasureTitle = $unitOfMeasureTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.unit-of-measures.delete');
    }
}
