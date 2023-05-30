<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // admin
    public function index()
    {

        // $data = auth()->user()->is_admin ? Campaign::all() : Campaign::where('author_id', auth()->id())->get();
        // return view('programadmin', compact('data')); // TODO: need view
        $campaigns =Campaign::with('user')->orderByDesc('created_at')->get();
        $no=1;
        return view('campaigns', compact('campaigns','no')); // TODO: need view

    }

    // view user
    public function index2()
    {

        $campaigns =Campaign::all();
        return view('donasi', compact('campaigns')); // TODO: need view

    }

    //view dashboard
    public function index3()
    {

        $campaigns =Campaign::all();
        return view('index', compact('campaigns')); // TODO: need view

    }

    // public function filter2(Request $request)
    // {
    //     $campaigns =Campaign::all();
    //     $selectedCategory = $request->input('category');

    //     $campaigns = Campaign::when($selectedCategory !== 'all', function ($query) use ($selectedCategory) {
    //         $query->where('category', $selectedCategory);
    //     })->paginate(10);

    //     $categories = Campaign::distinct('category')->pluck('category');

    //     return view('donasi', compact('campaigns', 'categories' ,'selectedCategory'));
    // }

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
        $campaigns = Campaign::all();
        return view('addcampaigns', compact('campaigns')); // TODO: need view
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
            'author_id' => 'required',
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
        // dd($request);
        $campaigns = new Campaign();
        $campaigns->title = $request->input('title');
        $campaigns->desc = $request->input('desc');
        $campaigns->author_id = $request->author_id;
        $campaigns->start_date = $request->input('start_date');
        $campaigns->dateline = $request->input('dateline');
        $campaigns->target_amount = $request->input('target_amount');
        $campaigns->img_url = '/uploadCampaign/' . $imageName;
        $campaigns->status = 0;
        $campaigns->no_rekening = $request->input('no_rekening');



        // $campaigns->status =
        //     'Menunggu Konfirmasi';
//            auth()->user()->is_admin ? 'Diterima' : 'Menunggu Konfirmasi';
        $campaigns->category = $request->input('category');
        // dd($campaigns);

        $campaigns->save();
        // return view('addcampaigns', [
        //     'campaigns' => $campaigns
        // ]);
        return redirect('/campaigns')->with('success', 'Some success message'); // TODO: need route
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaigns = Campaign::find($id);
        return view('campaigns.show', compact('campaigns')); // TODO: need view
    }

    public function shows($id)
    {
        $campaigns = Campaign::find($id);
        return response()->json($campaigns);
    }

    // public function showDonasi($id)
    // {
    //     $campaign = Campaign::find($id);
    //     return view('donasi.show', compact('campaign')); // TODO: need view
    // }

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

    // public function approveCampaign($data) {
    //     // 0 diterima
    //     // 1 ditolak
    //     // 2 proses
    //     $campaign = Campaign::findOrFail($data);
    //     $campaign->status = 0;
    //     // dd ($campaign);
    //     $campaign->save();
    //     return redirect()->route('index')->with('success', 'Campaign approved successfully');
    // }

    // public function declineCampaign($data) {
    //     // 0 diterima
    //     // 1 ditolak
    //     // 2 proses
    //     $campaign = Campaign::findOrFail($data);
    //     $campaign->status = 1;
    //     // dd ($campaign);
    //     $campaign->save();
    //     return redirect()->route('index')->with('success', 'Campaign decline');
    // }

    public function approveCampaign(Request $request, $data) {
        $campaign = Campaign::findOrFail($data);

        if ($request->input('status') == 0) {
            $campaign->status = 0;
            $message = 'Campaign approved successfully';
        } else if ($request->input('status') == 1) {
            $campaign->status = 1;
            $message = 'Campaign declined';
        }
        // dd($campaign);
        $campaign->save();
        return redirect()->route('index')->with('success', $message);
    }






}
