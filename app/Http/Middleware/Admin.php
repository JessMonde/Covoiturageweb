<?php

namespace App\Http\Middleware;
// use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('Connexion');
        }

        if (Auth::user()->role == 'Admin') {
            return redirect()->route('Conducteur.index');
        }

        if (Auth::user()->role =='Conducteur') {
            return redirect()->route('Passagers.index');
        }

        if (Auth::user()->role == 'Passager') {
            return redirect()->route('Admin.index');
        }
    }
}
