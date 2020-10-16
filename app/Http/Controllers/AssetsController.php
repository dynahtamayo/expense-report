<?php

namespace App\Http\Controllers;

use Auth;
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
	    	return view('assets.show',compact('assets'));
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

	    	$validated_fields = request()->validate(['description' => 'required']);

	    	$asset = Asset::create($validated_fields);

	    	return redirect('/assets');
	    }

	    public function edit(Asset $asset)
	    {
	    	return view('assets.edit', compact('assets'));
	    }

	    public function update(Asset $asset)
	    {

	    	$asset->description = request()->description;
	    	$asset->save();

	    	$validated_fields = request()->validate(['description' => 'required']);

	    	$asset = Asset::create($validated_fields);

	    	return redirect('/assets/'.$asset->id);
	    }	

	    public function destroy(Asset $asset)
	    {
	    	$asset->delete();
	    	return redirect('/assets');
	    }
}
