<?php

namespace App\View\Components\Stocks;

use Illuminate\View\Component;

class Delete extends Component
{
    public $stockDescription;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $stockDescription)
    {
        $this->stockDescription = $stockDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.stocks.delete');
    }
}
