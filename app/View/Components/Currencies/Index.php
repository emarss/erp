<?php

namespace App\View\Components\Currencies;

use App\Models\Currency;
use Illuminate\View\Component;

class Index extends Component
{
    public $currencies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->currencies = Currency::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.currencies.index');
    }
}
