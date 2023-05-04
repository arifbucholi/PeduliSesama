<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = auth()->user()->is_admin ? Campaign::all() : Campaign::where('author_id', auth()->id())->get();
        return view('', compact('data')); // TODO: need view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(''); // TODO: need view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCampaign = new Campaign();
        $newCampaign->title = $request->input('title');
        $newCampaign->desc = $request->input('desc');
        $newCampaign->author_id = $request->input('author_id');
        $newCampaign->start_date = $request->input('start_date');
        $newCampaign->dateline = $request->input('dateline');
        $newCampaign->target_amount = $request->input('target_amount');
        $newCampaign->img_url = $request->hasFile('img_url') ? $request->input('img_url') : "";
        $newCampaign->status =
            'Menunggu Konfirmasi';
//            auth()->user()->is_admin ? 'Diterima' : 'Menunggu Konfirmasi';

        $newCampaign->save();

        return redirect()->route('')->with('success', 'Some success message'); // TODO: need route
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $campaigns = Campaign::where('author_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $campaigns = Campaign::where('author_id', 1)->orderBy('created_at', 'desc')->get();
        return view('', compact('campaigns')); // TODO: need view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approveCampaign(Campaign $data) {
        $data->status = 'Diterima';
        $data->save();
        return redirect()->route('')->with('success', 'Some success message'); // TODO: need route
    }
}
