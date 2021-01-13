<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisationsController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'requisations',
	    	'pageTitle' => 'Requisations',
	    ]);
    }
}
