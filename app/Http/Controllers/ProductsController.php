<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function indexPage()
    {
    	return view('index')->with([
	    	'page' => 'products',
	    	'pageTitle' => 'Products',
	    ]);
    }
}
