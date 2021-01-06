<?php

namespace App\View\Components\Properties;

use App\Models\Property;
use Illuminate\View\Component;

class Show extends Component
{
    public $property;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentPropertyId)
    {
        $this->property = Property::findOrFail($currentPropertyId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.properties.show');
    }
}
