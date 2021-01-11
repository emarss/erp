<?php

namespace App\View\Components\Stocks;

use App\Models\Stock;
use Illuminate\View\Component;

class Show extends Component
{
    public $stock;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentStockId)
    {
        $this->stock = Stock::findOrFail($currentStockId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.stocks.show');
    }
}
