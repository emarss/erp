<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitOfMeasuresController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'unit-of-measures',
	    	'pageTitle' => 'Unit Of Measures',
	    ]);
    }
}
