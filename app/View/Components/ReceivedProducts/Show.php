<?php

namespace App\View\Components\ReceivedProducts;

use App\Models\ReceivedProduct;
use Illuminate\View\Component;

class Show extends Component
{
    public $receivedProduct;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentReceivedProductId)
    {
        $this->receivedProduct = ReceivedProduct::findOrFail($currentReceivedProductId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.received-products.show');
    }
}
