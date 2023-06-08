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
    public function index()
    {
        $campaigns = Campaign::get();
        $donations2 = Donation::get('donor_id', DB::raw('COUNT(*) as total_donations'), DB::raw('SUM(amount) as total_amount'))
        ;
        // $campaignCount = Campaign::count();


        return view('index', compact('campaigns','donations2'));
    }

    public function userProfile()
    {
        return view('profil');
    }



}
