<?php

namespace App\Http\Livewire;

use App\Models\PaymentMethod;
use Livewire\Component;

class PaymentMethods extends Component
{
    public $action = 'payment-methods.index';
    public $title, $description, $currentPaymentMethodId;

    public function render()
    {
        return view('livewire.payment-methods');
    }

    public function edit(int $id)
    {
        $this->currentPaymentMethodId = $id;

        $paymentMethod = PaymentMethod::findOrFail($id);
        $this->title = $paymentMethod->title;
        $this->description =  $paymentMethod->description;
        $this->emit("hideFeedback");
        $this->action = "payment-methods.edit";
    }

    public function delete(int $id)
    {
        $this->currentPaymentMethodId = $id;

        $this->title = PaymentMethod::findOrFail($id)->title;
        $this->emit("hideFeedback");
        $this->action = "payment-methods.delete";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "payment-methods.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "payment-methods.create";
    }

    public function savePaymentMethod()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        PaymentMethod::create([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'payment-methods.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Payment Method added successfully");
    }

    public function destroyCurrentPaymentMethod()
    {
        PaymentMethod::destroy($this->currentPaymentMethodId);
        $this->action = 'payment-methods.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Payment Method deleted successfully");
    }


    public function updatePaymentMethod()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        PaymentMethod::find($this->currentPaymentMethodId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'payment-methods.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Payment Method updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->title = $this->description = $this->currentPaymentMethodId = null;
    }
}
