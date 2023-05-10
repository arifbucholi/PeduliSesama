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

        // $data = auth()->user()->is_admin ? Campaign::all() : Campaign::where('author_id', auth()->id())->get();
        // return view('programadmin', compact('data')); // TODO: need view
        $data =Campaign::all();
        return view('campaigns', compact('data')); // TODO: need view
    }

    // public function addCampaigns()
    // {
    //     $data =Campaign::all();
    //     return view('addcampaigns', compact('data'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcampaigns'); // TODO: need view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'dateline' => 'required|date',
            'target_amount' => 'required|integer',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|date',
            'status' => 'boolean',
            'category' => 'required',
        ]);

        $image = $request->file('img_url');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploadCampaign/'), $imageName);

        $newCampaign = new Campaign();
        $newCampaign->title = $request->input('title');
        $newCampaign->desc = $request->input('desc');
        $newCampaign->author_id = 1;
        $newCampaign->start_date = $request->input('start_date');
        $newCampaign->dateline = $request->input('dateline');
        $newCampaign->target_amount = $request->input('target_amount');
        $newCampaign->img_url = '/uploadCampaign/' . $imageName;

        // $is_admin = auth()->user()->is_admin;
        if (Auth::user()->is_admin==1) {
            $newCampaign->status = 1; // status "diterima"
        } else {
            $newCampaign->status = 0; // status "menunggu konfirmasi"
        }
        // $newCampaign->status =
        //     'Menunggu Konfirmasi';
//            auth()->user()->is_admin ? 'Diterima' : 'Menunggu Konfirmasi';
        $newCampaign->category = $request->input('category');
        dd($newCampaign);

        $newCampaign->save();

        return redirect()->route('campaigns.index')->with('success', 'Some success message'); // TODO: need route
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
        return view('campaigns.show', compact('campaigns')); // TODO: need view
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
