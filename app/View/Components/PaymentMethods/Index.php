<?php

namespace App\View\Components\PaymentMethods;

use App\Models\PaymentMethod;
use Illuminate\View\Component;

class Index extends Component
{
    public $paymentMethods;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->paymentMethods = PaymentMethod::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.payment-methods.index');
    }
}
