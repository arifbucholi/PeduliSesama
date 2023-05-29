<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



use Illuminate\Http\Request;

class EditProfilUserController extends Controller
{
    public function edit($id)
    {
        $data = Auth::user($id);
        return view('editprofilepage', compact(['data']));
    }

    public function update(Request $request)
    {
        $data = User::find($request['updater']);

        $data->update([
            'name'=>$request['name'],
        ]);
        

        // if($request->name != ''){
        //     $data['name'] = bcrypt($request->name);
        // }else{
        //     unset($data['name']);
        // }

        // if($request->email != ''){
        //     $data['email'] = bcrypt($request->email);
        // }else{
        //     unset($data['email']);
        // }

        // if($request->password != ''){
        //     $data['password'] = bcrypt($request->password);
        // }else{
        //     unset($data['password']);
        // }
        $data->save();
        return back();
    }
}
