<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CampaignUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createprogram()
    {
        $campaigns = Campaign::all();
        return view('addprogramuser', compact('campaigns'));
    }

    public function storeprogramuser(Request $request)
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
        $campaigns->status = 2;
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
        return redirect('/programuser')->with('success', 'Some success message'); // TODO: need route
    }

    public function showprogramuser()
    {
        $campaigns = Campaign::all();
        // $no=1;
        // return response()->json($campaigns);
        return view('programuser', compact('campaigns'));
    }

}
