<?php

namespace App\View\Components\Currencies;

use Illuminate\View\Component;

class Delete extends Component
{

    public $currencyTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $currencyTitle)
    {
        $this->currencyTitle = $currencyTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.currencies.delete');
    }
}
