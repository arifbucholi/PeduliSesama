<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // public function googleCallback()
    // {
    //     $user = Socialite::driver('google')->user();
    //     $isRegistered = $this->googleAuth($user);

    //     if ($isRegistered) {
    //         return redirect()->route('home');
    //     } else {
    //         return redirect()->route('login')->with('alert', 'Anda tidak dapat login menggunakan akun Google. Gunakan akun yang sudah ada.');
    //     }
    // }

    public function googleCallback()
    {
        try{

            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);

                if ($finduser->is_admin == 1) {
                    return redirect()->intended('dashboardadmin');
                } else {
                    return redirect()->intended('home');
                }
            } else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'password' => Hash::make('password')
                ]);
                Auth::login($newUser);
                return redirect()->intended('home');

            }
            dd($user);
        } catch (Exception $e) {
            // Tangani exception jika terjadi kesalahan
            return redirect()->route('login')->with('alert', 'Terjadi kesalahan saat login menggunakan akun Google. Silakan coba lagi.');
        }
    }

    // public function googleAuth($incomingUser)
    // {
    //     $user = User::where('google_id', $incomingUser->id)->first();
    //     if (!$user) {
    //         // Menampilkan pesan alert jika pengguna tidak terdaftar
    //         session()->flash('alert');
    //         return false;
    //     }
    //     if(!$user){
    //         $user = new User();
    //         $user->name = $incomingUser->name;
    //         $user->email = $incomingUser->email;
    //         $user->google_id = $incomingUser->id;
    //         $user->save();
    //     }

    //     Auth::login($user);
    //     return true;
    // }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect()->intended('/login');
    }
}
