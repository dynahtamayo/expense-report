<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('users.index', compact('users'));
    }

    public function show(User $users){
    	return view('users.show', compact('users'));
    }   

    public function create(){
    	return view('users.create');
    }

    public function store(){
    	//Create new
    	$users = new User;
    	$users->first_name = request()->first_name;
    	$users->last_name = request()->last_name;
    	$users->email = request()->email;
    	$users->phone = request()->phone;
        $users->department_id = request()->department_id;
        $users->save();
    	//redirect
       	return redirect('/');
    }

    public function edit(User $users){
    	return view ('users.edit', compact('users'));
    }

    public function update(User $users){

    	$users->first_name = request()->first_name;
    	$users->last_name = request()->last_name;
    	$users->email = request()->email;
    	$users->phone = request()->phone;
        $users->department_id = request()->department_id;
        $users->save();
    	return redirect('/');
    }

    public function destroy(User $users){
    	$users->delete();
    	return redirect('/');
    }
}
