<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'payment-methods',
	    	'pageTitle' => 'Payment Methods',
	    ]);
    }
}
