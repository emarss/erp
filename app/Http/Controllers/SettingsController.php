<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function indexPage()
    {
    	return view('index')->with([
	    	'page' => 'settings',
	    	'pageTitle' => 'Settings',
	    ]);
    }

}
