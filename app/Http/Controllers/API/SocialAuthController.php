<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        $isRegistered = $this->googleAuth($user);

        if ($isRegistered) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('alert', 'Anda tidak dapat login menggunakan akun Google. Gunakan akun yang sudah ada.');
        }
    }

    public function googleAuth($incomingUser)
    {
        $user = User::where('google_id', $incomingUser->id)->first();
        if (!$user) {
            // Menampilkan pesan alert jika pengguna tidak terdaftar
            session()->flash('alert');
            return false;
        }
        if(!$user){
            $user = new User();
            $user->name = $incomingUser->name;
            $user->email = $incomingUser->email;
            $user->google_id = $incomingUser->id;
            $user->save();
        }

        Auth::login($user);
        return true;
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect()->intended('/login');
    }
}
