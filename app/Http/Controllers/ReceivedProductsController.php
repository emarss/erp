<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceivedProductsController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'received-products',
	    	'pageTitle' => 'Received Products',
	    ]);
    }
}
