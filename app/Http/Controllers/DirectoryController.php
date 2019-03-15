<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;

class DirectoryController extends Controller
{
    public function home()
    {
        $directories = Directory::all();

        return view('home', compact('directories'));
    }

    public function index()
    {
    
        $directories = Directory::all();

        return view('index', compact('directories'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
    }


    public function update(Request $request, $id)
    {


    }

    public function destroy($id)
    {


    }


    public function search(Request $request)
    {


    }
}
