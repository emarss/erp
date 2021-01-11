<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'clients',
	    	'pageTitle' => 'Clients',
	    ]);
    }
}
