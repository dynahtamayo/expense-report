<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    //
     public function index()
	    {
	    	$assets = Asset::all();
	    	return view('assets.index',compact('assets'));
	    }

	    public function show(Asset $asset)
	    {
	    	return view('assets.show',compact('asset'));
	    }

	    public function create()
	    {
	    	return view('assets.create');
	    }

	    public function store()
	    {
	    	$asset = new Asset;
	    	$asset->description = request()->description;
	    	$asset->save();

	    	return redirect('/');
	    }

	    public function edit(Asset $asset)
	    {
	    	return view('assets.edit', compact('asset'));
	    }

	    public function update(Asset $asset)
	    {

	    	$asset->description = request()->description;
	    	$asset->save();

	    	return redirect('/assets/'.$asset->id);
	    }	

	    public function destroy(Asset $asset)
	    {
	    	$asset->delete();
	    	return redirect('/');
	    }
}
