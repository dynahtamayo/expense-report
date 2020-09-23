<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index(){
    	$departments = Department::all();
    	return view('departments.index', compact('departments'));
    }

    public function show(Department $departments){
    	return view('departments.show', compact('departments'));
    }   

    public function create(){
    	return view('departments.create');
    }

    public function store(){
    	//Create new
    	$departments = new Department;
    	$departments->name = request()->name;
    	$departments->parent_department_id = request()->parent_department_id;
        $departments->save();
    	//redirect
       	return redirect('/departments');
    }

    public function edit(Department $departments){
    	return view ('departments.edit', compact('departments'));
    }

    public function update(Department $departments){

    	$departments->name = request()->name;
    	$departments->parent_department_id = request()->parent_department_id;
        $departments->save();

    	return redirect('/departments');
    }

    public function destroy(Department $departments){
    	$departments->delete();
    	return redirect('/departments');
    }
}
