<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'users',
	    	'pageTitle' => 'Users',
	    ]);
    }
}
