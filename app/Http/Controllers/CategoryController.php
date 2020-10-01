<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
    {
        public function index()
        {
        	$Categories = Category::all();
        	return view('category.index', compact('Categories'));
        }

        public function show(Category $Categories)
        {
        	return view('category.show', compact('Categories'));
        }

        public function create()
        {
        	return view('category.create');
        }

        public function store()
        {
        	// Create new event
        	$validated_fields = request()->validate([
                    'name' => 'required',
                    'money' => 'required'
                ]);

            $Categories = Category::create($validated_fields); 

        	// Redirect
        	return redirect('/');
        }

        public function edit(Category $Categories)
        {
        	return view('category.edit', compact('Categories'));
        }

        public function update(Category $Categories)
        {
        	
        	$validated_fields = request()->validate([
                    'name' => 'required',
                    'money' => 'required'
                ]);

            $Categories = Category::put($validated_fields);
        	return redirect('/category/'.$Categories->id);
        }	

        public function destroy(Category $Categories)
        {
        	$Categories->delete();
        	return redirect('/');
        }

    }

