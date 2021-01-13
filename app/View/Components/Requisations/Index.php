<?php

namespace App\View\Components\Requisations;

use App\Models\Requisation;
use Illuminate\View\Component;

class Index extends Component
{
    public $requisations;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->requisations = Requisation::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.requisations.index');
    }
}
