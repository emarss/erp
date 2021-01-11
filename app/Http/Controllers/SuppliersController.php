<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function indexPage()
    {
    	return view('index')->with([
	    	'page' => 'suppliers',
	    	'pageTitle' => 'Suppliers',
	    ]);
    }
}
