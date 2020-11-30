<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexPage()
    {
    	return view('index')->with([
	    	'page' => 'profile',
	    	'pageTitle' => 'Profile',
	    ]);
    }
}
