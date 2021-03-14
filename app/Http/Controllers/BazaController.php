<?php

namespace App\Http\Controllers;

use App\Models\baza;
use Illuminate\Http\Request;

class BazaController extends Controller
{
	public function __construct() {
		 
		 $this->middleware('auth');
	}
	
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$baza = baza::paginate(10);
		
         return view('baza',compact('baza'));
    }
	
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baza  $baza
     * @return \Illuminate\Http\Response
     */
    public function show(baza $baza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baza  $baza
     * @return \Illuminate\Http\Response
     */
    public function edit(baza $baza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baza  $baza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baza $baza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baza  $baza
     * @return \Illuminate\Http\Response
     */
    public function destroy(baza $baza)
    {
        //
    }
}
