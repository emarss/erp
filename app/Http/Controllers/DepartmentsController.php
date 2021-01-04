<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function indexPage()
    {
        return view('index')->with([
	    	'page' => 'departments',
	    	'pageTitle' => 'Departments',
	    ]);
    }
}
