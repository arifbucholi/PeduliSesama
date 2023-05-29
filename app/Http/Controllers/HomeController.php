<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        // if (Auth::check() && Auth::user()->is_admin) {
        //     return redirect()->route('dashboardadmin');
        // } else {
        //     return redirect()->route('index');
        // }
        $campaigns = Campaign::all();
        return view('index', compact('campaigns'));
    }

    public function userProfile()
    {
        return view('profil');
    }

    public function indexAdmin()
    {
    //     if (Auth::check() && Auth::user()->is_admin) {
    //         return redirect()->route('dashboardadmin');
    //     } else {
    //         return redirect()->route('index');
    //     }
        return view('dashboardadmin');
    }

    // public function userCount()
    // {
    //     $userCount = User::count();
    //     return view('dashboardadmin', compact('userCount'));
    // }

    // public function campaignCount()
    // {
    //     $campaignCount = Campaign::count();
    //     return view('dashboardadmin', compact('campaignCount'));
    // }
}
