<?php

namespace App\View\Components\ReceivedProducts;

use App\Models\ReceivedProduct;
use Illuminate\View\Component;

class Index extends Component
{
    public $receivedProducts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->receivedProducts = ReceivedProduct::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.received-products.index');
    }
}
