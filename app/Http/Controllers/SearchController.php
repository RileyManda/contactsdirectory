<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function mySearch(Request $request)
    {
    	if($request->has('search')){
    		$directory = Directory::search($request->get('search'))->get();	
    	}else{
    		$directory = Directory::get();
    	}


    	return view('my-search', compact('directory'));
    }

}
