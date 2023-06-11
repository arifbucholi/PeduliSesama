<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     // index login user
    public function index()
    {
        // $campaigns = Campaign::withSum('donations', 'amount')->get();
        $campaigns = Campaign::withSum(['donations' => function ($query) {
            $query->where('status', 'success');
        }], 'amount')->get();
        // dd($campaigns);
        return view('index', compact('campaigns'));
    }

    public function userProfile()
    {
        return view('profil');
    }

    // protected $appends = ['donations_sum_amount'];

    // public function getDonationsSumAmountAttribute()
    // {
    //     return $this->donations->sum('amount');
    // }



}
