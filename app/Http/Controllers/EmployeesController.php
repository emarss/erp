<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'employees',
	    	'pageTitle' => 'Employees',
	    ]);
    }
}
