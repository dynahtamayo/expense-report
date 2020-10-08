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

        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'department_id' => 'required',
        ]);

        $validated_fields['password'] = bcrypt($validated_fields['password']);
        $users = User::create($validated_fields);
       	return redirect('/users');
    }

    public function edit(User $users){
    	return view ('users.edit', compact('users'));
    }

    public function update(User $users){
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'department_id' => 'required',
        ]);
        $validated_fields['password'] = bcrypt($validated_fields['password']);
        $users->update($validated_fields);
    	return redirect('/users');
    }

    public function destroy(User $users){
    	$users->delete();
    	return redirect('/users');
    }
}
