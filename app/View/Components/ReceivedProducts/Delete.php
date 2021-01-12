<?php

namespace App\View\Components\ReceivedProducts;

use Illuminate\View\Component;

class Delete extends Component
{
    public $productDescription;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $productDescription)
    {
        $this->productDescription = $productDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.received-products.delete');
    }
}
