<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->googleAuth($user);
        return redirect()->route('index');
    }

    public function googleAuth($incomingUser)
    {
        $user = User::where('google_id', $incomingUser->id)->first();
        if(!$user){
            $user = new User();
            $user->name = $incomingUser->name;
            $user->email = $incomingUser->email;
            $user->google_id = $incomingUser->id;
            $user->save();
        }
        Auth::login($user);
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect()->intended('/login');
    }
}
