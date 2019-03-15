<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;

class DirectoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'home_number' => 'required|alpha_num',
            'mobile_number' => 'required|alpha_num',
            'email_address' => 'required|max:255',
        ]);
        $directory = Directory::create($validatedData);
   
        return redirect('/directories')->with('success', 'Contact successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $directory = Directory::findOrFail($id);

    return view('edit', compact('directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'home_number' => 'required|alpha_num',
            'mobile_number' => 'required|alpha_num',
            'email_address' => 'required|max:255',
        ]);
        Directory::whereId($id)->update($validatedData);

        return redirect('/directories')->with('success', 'Contact successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $directory = Directory::findOrFail($id);
        $directory->delete();

        return redirect('/directories')->with('success', 'Contact successfully deleted');
    }

    public function search(Request $request)
    {
        
      //  Route::any ( '/search', function () {
       //     $query = Directory::get ( 'q' );
          //  $directory = Directory::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $query . '%' )->get ();
           // if (count ( $query ) > 0)
           //     return view ( 'search-results' )->withDetails ( $$directory )->withQuery ( $query );
          //  else
         //       return view ( 'search-results' )->withMessage ( 'No Details found. Try to search again !' );
       // } );



   $query = $request->input('query');
      $directory = Directory::where('first_name','like',"%$query%");
      return view ('search-results')->with('directories',$directory)-> withQuery($query);

      
    }
}
