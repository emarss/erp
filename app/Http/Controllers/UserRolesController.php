<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'user-roles',
	    	'pageTitle' => 'User Roles',
	    ]);
    }
}
