<?php

namespace App\View\Components\PaymentMethods;

use Illuminate\View\Component;

class Delete extends Component
{
    public $paymentMethodTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $paymentMethodTitle)
    {
        $this->paymentMethodTitle = $paymentMethodTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.payment-methods.delete');
    }
}
