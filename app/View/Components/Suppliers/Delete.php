<?php

namespace App\View\Components\Suppliers;

use Illuminate\View\Component;

class Delete extends Component
{
    public $supplierName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $supplierName)
    {
        $this->supplierName = $supplierName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.suppliers.delete');
    }
}
