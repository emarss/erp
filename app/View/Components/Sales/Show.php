<?php

namespace App\View\Components\Sales;

use App\Models\Sale;
use Illuminate\View\Component;

class Show extends Component
{
    public $sale;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentSaleId)
    {
        $this->sale = Sale::findOrFail($currentSaleId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.sales.show');
    }
}
