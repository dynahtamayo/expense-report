<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function index(){
    	return view ('login');
    }

    public function login(){

    	request()->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials)){
    	return redirect('/dashboard');
    	}
    	return back()->withErrors([
    		'credentials' => 'Incorrect Email or Password'
    	]);
	}

	public function logout(){
		Auth::logout();
		return redirect ('/login');
	}

    public function register(){
        return view('register');
    }

    public function store(){
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'department_id' => 'required',
        ]);
        return redirect('/login');
    }
}