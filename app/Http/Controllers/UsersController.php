<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

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
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        //kurang sintaks re-password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('login')->with('success', 'Registration Success');
    }
}
