<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'Admin':
                 $this->redirectTo = 'Admin';
                 return $this->redirectTo;
                 break;
            case 'Conducteur':
                 $this->redirectTo = 'Conducteur';
                 return $this->redirectTo;
                 break;
            case 'Passager':
                 $this->redirectTo = 'Passager';
                 return $this->redirectTo;
                 break;                    
         }
    }
}
