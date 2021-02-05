<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
        /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

   

    public function loginView()
    {
        return \view('login');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        

        if(Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            return \redirect()->intended('/');
        
        }
            return \back()->withErrors([
                "errors" => "No has logueado, revisa bien tu correo o contraseña"
            ]);
        

        
        

       
    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
