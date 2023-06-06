<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Actions\Fortify\UpdateUserPassword;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
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
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }

    public function authenticate(Request $request)
    {
        //
    }

    public function logout()
    {
        if(session()->has('loggedUser'));
        {
            session()->pull('loggedUser');
            return redirect('/login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $users = new Users;
        $users->nama = $request->nama;
        $users->email = $request->email;
        $users->password = $request->password;
        //kurang sintaks re-password
        $users->password = Hash::make($request->password);
        $users->save();

        return redirect('login')->with('success', 'Registration Success');
    }

    public function updatePassword(User $user, Request $req, UpdateUserPassword $update)
    {
        /**
         * req body
         * {
         *  "current_password",
         *  "password"
         * }
         */
        $update->update($user, $req->all());
        return view('', ['message' => 'Success']);
    }

    public function count()
    {
        $campaignCount = Campaign::count();
        $userCount = User::count();
        $donations = Donation::orderBy('amount', 'desc')->take(5)->get();
        $donations2 = Donation::select('donor_id', DB::raw('COUNT(*) as total_donations'), DB::raw('SUM(amount) as total_amount'))
        ->groupBy('donor_id')
        ->orderBy('total_donations', 'desc')
        ->take(5)
        ->get();

        // Ambil data user berdasarkan donor_id
        $userIds = $donations->pluck('donor_id');
        $users = User::whereIn('id', $userIds)->get();

        return view('dashboardadmin', [
            'userCount' => $userCount,
            'campaignCount' => $campaignCount,
            'donations' => $donations,
            'donations2' => $donations2,
            'users' => $users
        ]);
    }

    public function showUser()
    {
        $users = Users::all();
        $totalAmount = Donation::select('donor_id', DB::raw('COUNT(*) as total_donations'), DB::raw('SUM(amount) as total_amount'))
        ->groupBy('donor_id')
        ->orderBy('total_donations', 'desc')
        ->get();

        $no = 1;
        return view('daftarpengguna', compact('users','no','totalAmount'));
    }
}
