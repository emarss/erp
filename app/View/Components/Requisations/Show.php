<?php

namespace App\View\Components\Requisations;

use App\Models\Requisation;
use Illuminate\View\Component;

class Show extends Component
{
    public $requisation;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentRequisationId)
    {
        $this->requisation = Requisation::findOrFail($currentRequisationId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.requisations.show');
    }
}
