<?php

namespace App\View\Components\Sales;

use App\Models\Sale;
use Illuminate\View\Component;

class Index extends Component
{
    public $sales;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sales = Sale::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.sales.index');
    }
}
