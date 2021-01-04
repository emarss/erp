<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'currencies',
	    	'pageTitle' => 'Currencies',
	    ]);
    }
}
