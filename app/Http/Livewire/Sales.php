<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use App\Models\Stock;
use Livewire\Component;

class Sales extends Component
{
    public $action = 'sales.index';
    public $stock_id, $profit, $added_by, $currentSaleId, $product, $productDescription;
    public $unit_selling_price = 0, $quantity = 1, $total_selling_price = 0, $actual_selling_price = 0, $discount = 0;

    protected $rules = [
        'stock_id' => "required|numeric|min:0",
        'quantity' => "required|numeric|min:1",
        'actual_selling_price' => "required|numeric|min:0|lte:total_selling_price",
        'unit_selling_price' => "required|numeric|min:0",
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);

        switch ($field) {
            case 'stock_id':
                $this->product = Stock::find($this->stock_id);
                if($this->product != null){
                    $this->unit_selling_price = Stock::find($this->stock_id)->unit_selling_price;
                    $this->total_selling_price = $this->unit_selling_price * $this->quantity;
                    $this->actual_selling_price = $this->unit_selling_price * $this->quantity;
                    $this->discount = $this->total_selling_price - $this->actual_selling_price;
                }else{
                    $this->unit_selling_price = 0;
                    $this->total_selling_price = 0;
                    $this->actual_selling_price = 0;
                    $this->discount = 0;
                }
                break;

            case 'quantity':
                $this->total_selling_price = $this->unit_selling_price * $this->quantity;
                $this->actual_selling_price = $this->unit_selling_price * $this->quantity;
                $this->discount = $this->total_selling_price - $this->actual_selling_price;
                break;

            case 'actual_selling_price':
                $this->discount = $this->total_selling_price - $this->actual_selling_price;
                break;

            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.sales');
    }

    public function edit(int $id)
    {
        $this->currentSaleId = $id;

        $sale = Sale::findOrFail($id);
        $this->stock_id = $sale->stock_id;
        $this->quantity = $sale->quantity;
        $this->total_selling_price = $sale->total_selling_price;
        $this->actual_selling_price = $sale->actual_selling_price;
        $this->discount = $sale->discount;
        $this->profit = $sale->profit;

        $this->product = $sale->product;
        $this->unit_selling_price = $this->product->unit_selling_price;

        $this->emit("hideFeedback");
        $this->action = "sales.edit";
    }

    public function delete(int $id)
    {
        $this->currentSaleId = $id;

        $this->productDescription = Sale::findOrFail($id)->product->description;
        $this->emit("hideFeedback");
        $this->action = "sales.delete";
    }

    public function show(int $id)
    {
        $this->currentSaleId = $id;
        $this->emit("hideFeedback");
        $this->action = "sales.show";
    }

    public function index()
    {
        $this->resetFormFields();
        $this->emit("hideFeedback");
        $this->action = "sales.index";
    }

    public function create()
    {
        $this->emit("hideFeedback");
        $this->action = "sales.create";
    }

    public function saveSale()
    {
        $this->validate();

        $sale = Sale::create([
            'stock_id' => $this->stock_id,
            'quantity' => $this->quantity,
            'total_selling_price' => $this->total_selling_price,
            'actual_selling_price' => $this->actual_selling_price,
            'discount' => $this->discount,
            'profit' => $this->actual_selling_price - ($this->quantity * $this->product->unit_buying_price),
            'department_id' => session('department')->id,
            'added_by' => auth()->user()->id,
        ]);

        $this->action = 'sales.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Sale added successfully");
    }

    public function destroyCurrentSale()
    {
        Sale::destroy($this->currentSaleId);

        $this->action = 'sales.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Sale deleted successfully");
    }


    public function updateSale()
    {
        $this->validate();

        $sale = Sale::find($this->currentSaleId);
        $sale->update([
            'stock_id' => $this->stock_id,
            'quantity' => $this->quantity,
            'total_selling_price' => $this->total_selling_price,
            'actual_selling_price' => $this->actual_selling_price,
            'discount' => $this->discount,
            'profit' => $this->actual_selling_price - ($this->quantity * $this->product->unit_buying_price),
            'department_id' => session('department')->id,
        ]);

        $this->action = 'sales.index';
        $this->resetFormFields();

        $this->emit('successMessage', "Sale updated successfully");
    }


    public function resetFormFields()
    {
        $this->resetErrorBag();
        $this->stock_id = $this->profit = $this->added_by = $this->currentSaleId = 0;
        $this->unit_selling_price = $this->total_selling_price = $this->actual_selling_price = $this->discount = 0;
        $this->quantity = 1;
        $this->product = null;
    }
}
