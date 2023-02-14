<?php

namespace App\Http\Controllers;

use App\Models\Gunung;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gunungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gunung = DB::table('mountains')->get();
        // dd($gunung);
        return view('perizinan', compact('gunung'));
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
     * @param  \App\Models\gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function show(gunung $gunung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function edit(gunung $gunung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gunung $gunung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function destroy(gunung $gunung)
    {
        //
    }
}
