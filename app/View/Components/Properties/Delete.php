<?php

namespace App\View\Components\Properties;

use Illuminate\View\Component;

class Delete extends Component
{
    public $propertyName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $propertyName)
    {
        $this->propertyName = $propertyName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.properties.delete');
    }
}
