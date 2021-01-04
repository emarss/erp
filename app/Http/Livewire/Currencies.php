<?php

namespace App\Http\Livewire;

use App\Models\Currency;
use Livewire\Component;

class Currencies extends Component
{
    public $action = 'currencies.index';
    public $title, $description, $currentCurrencyId;

    public function render()
    {
        return view('livewire.currencies');
    }

    public function edit(int $id)
    {
        $this->currentCurrencyId = $id;

        $currency = Currency::findOrFail($id);
        $this->title = $currency->title;
        $this->description =  $currency->description;
        $this->emit("hideFeedback");
        $this->action = "currencies.edit";
    }

    public function delete(int $id)
    {
        $this->currentCurrencyId = $id;

        $this->title = Currency::findOrFail($id)->title;
        $this->emit("hideFeedback");
        $this->action = "currencies.delete";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "currencies.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "currencies.create";
    }

    public function saveCurrency()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Currency::create([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'currencies.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Currency added successfully");
    }

    public function destroyCurrentCurrency()
    {
        Currency::destroy($this->currentCurrencyId);
        $this->action = 'currencies.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Currency deleted successfully");
    }


    public function updateCurrency()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Currency::find($this->currentCurrencyId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'currencies.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Currency updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->title = $this->description = $this->currentCurrencyId = null;
    }
}
