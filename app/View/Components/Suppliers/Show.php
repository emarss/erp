<?php

namespace App\View\Components\Suppliers;

use App\Models\Supplier;
use Illuminate\View\Component;

class Show extends Component
{
    public $supplier;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentSupplierId)
    {
        $this->supplier = Supplier::findOrFail($currentSupplierId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.suppliers.show');
    }
}
