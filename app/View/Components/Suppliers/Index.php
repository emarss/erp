<?php

namespace App\View\Components\Suppliers;

use App\Models\Supplier;
use Illuminate\View\Component;

class Index extends Component
{
    public $suppliers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->suppliers = Supplier::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.suppliers.index');
    }
}
