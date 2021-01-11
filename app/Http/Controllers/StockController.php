<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function indexPage()
    {
    	return view('index')->with([
	    	'page' => 'stocks',
	    	'pageTitle' => 'Stocks',
	    ]);
    }
}
