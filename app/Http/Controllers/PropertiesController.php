<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'properties',
	    	'pageTitle' => 'Properties',
	    ]);
    }
}
