<?php

namespace App\Http\Controllers;

use App\Models\mountain;
use App\Http\Requests\StoremountainRequest;
use App\Http\Requests\UpdatemountainRequest;

class MountainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perizinan', [
            "mountains" => mountain::all()
        ]);
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
     * @param  \App\Http\Requests\StoremountainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremountainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mountain  $mountain
     * @return \Illuminate\Http\Response
     */
    public function show(mountain $mountain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mountain  $mountain
     * @return \Illuminate\Http\Response
     */
    public function edit(mountain $mountain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemountainRequest  $request
     * @param  \App\Models\mountain  $mountain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemountainRequest $request, mountain $mountain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mountain  $mountain
     * @return \Illuminate\Http\Response
     */
    public function destroy(mountain $mountain)
    {
        //
    }
}
