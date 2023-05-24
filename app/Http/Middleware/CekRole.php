<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->is_admin) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');

        if (Auth::check() && Auth::user()->is_admin==1) {
            return redirect()->route('dashboardadmin');
        } else {
            return redirect()->intended('index');
        }
    }

    // public function handle(Request $request, Closure $next)
    // {
    //    if(Auth::check()) {

    //     // admin : is_admin = 1
    //     // user : is_admin = 0

    //         if(Auth::user()->is_admin == 1) {
    //             return redirect('/dashboardadmin');

    //         }else {
    //             return $next($request);
    //         }
    //    }

    //     abort(403, 'Unauthorized action.');

    //     if (Auth::check() && Auth::user()->is_admin==1) {
    //         return redirect()->route('dashboardadmin');
    //     } else {
    //         return redirect()->intended('index');
    //     }
    // }


}
