<?php

namespace App\Http\Controllers;

use App\Models\UserAccountStatus;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginFormRequest;
use App\Models\Department;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }


    public function start($slug){
        $department = Department::where('slug',$slug)->first();
        if($department == null){
            abort(404);
        }
        session(['department' => $department]);
    	return redirect()->route('dashboard');
    }


    public function dashboard(){
    	return view('index')->with([
	    	'page' => 'dashboard',
	    	'pageTitle' => 'Dashboard',
	    ]);
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(LoginFormRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt([
            'email' => $email,
            'password' => $password,
            'status' => UserAccountStatus::ACTIVE
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }
        return back()->with([
            'invalid_credentials' => true,
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
