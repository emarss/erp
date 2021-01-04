<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
	public $action = 'products.index';

	public $description;
	public $control_quantity;
	public $physical_quantity;
	public $unit_selling_price;
	public $unit_buying_price;
	public $unit_of_measure;
	public $location;
	public $remarks;

    public function render()
    {
        return view('livewire.products');
    }

    public function create()
    {
    	$this->action = 'products.create';
    }

    public function index()
    {
    	$this->action = 'products.index';
    }
}
