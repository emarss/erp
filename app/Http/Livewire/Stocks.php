<?php

namespace App\Http\Livewire;

use App\Models\Stock;
use Livewire\Component;

class Stocks extends Component
{
    public $action = 'stocks.index';
    public $description, $unit_of_measure_id, $control_quantity, $physical_quantity, $unit_buying_price, $unit_selling_price, $remarks, $added_by, $currentStockId;

    protected $rules = [
        'description' => 'required|string',
        'unit_of_measure_id' => 'required|numeric',
        'control_quantity' => 'required|numeric',
        'physical_quantity' => 'required|numeric',
        'unit_buying_price' => 'required|numeric',
        'unit_selling_price' => 'required|numeric',
        'remarks' => 'nullable|string',
    ];

    public function render()
    {
        return view('livewire.stocks');
    }

    public function edit(int $id)
    {
        $this->currentStockId = $id;

        $stock = Stock::findOrFail($id);
        $this->description = $stock->description;
        $this->unit_of_measure_id = $stock->unit_of_measure_id;
        $this->control_quantity = $stock->control_quantity;
        $this->physical_quantity = $stock->physical_quantity;
        $this->unit_buying_price = $stock->unit_buying_price;
        $this->unit_selling_price = $stock->unit_selling_price;
        $this->remarks = $stock->remarks;

        $this->emit("hideFeedback");
        $this->action = "stocks.edit";
    }

    public function delete(int $id)
    {
        $this->currentStockId = $id;

        $this->description = Stock::findOrFail($id)->description;
        $this->emit("hideFeedback");
        $this->action = "stocks.delete";
    }

    public function show(int $id)
    {
        $this->currentStockId = $id;
        $this->emit("hideFeedback");
        $this->action = "stocks.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "stocks.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "stocks.create";
    }

    public function saveStock()
    {
        $this->validate();

        $stock = Stock::create([
            'description' => $this->description,
            'unit_of_measure_id' => $this->unit_of_measure_id,
            'control_quantity' => $this->control_quantity,
            'physical_quantity' => $this->physical_quantity,
            'unit_buying_price' => $this->unit_buying_price,
            'unit_selling_price' => $this->unit_selling_price,
            'remarks' => $this->remarks,
            'department_id' => session('department')->id,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'stocks.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Stock added successfully");
    }

    public function destroyCurrentStock()
    {
        Stock::destroy($this->currentStockId);

        $this->action = 'stocks.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Stock deleted successfully");
    }


    public function updateStock()
    {
        $this->validate();

        $stock = Stock::find($this->currentStockId);
        $stock->update([
            'description' => $this->description,
            'unit_of_measure_id' => $this->unit_of_measure_id,
            'control_quantity' => $this->control_quantity,
            'physical_quantity' => $this->physical_quantity,
            'unit_buying_price' => $this->unit_buying_price,
            'unit_selling_price' => $this->unit_selling_price,
            'remarks' => $this->remarks,
        ]);

        $this->action = 'stocks.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Stock updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->description = $this->unit_of_measure_id = $this->control_quantity = $this->physical_quantity = $this->unit_buying_price = $this->unit_selling_price = $this->remarks = $this->added_by =  $this->currentStockId = null;
    }

}
