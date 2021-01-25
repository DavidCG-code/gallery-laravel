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

    public function registerView(){
        return \view('register');
    }

    public function loginView()
    {
        return \view('login');
    }

    public function register(Request $request){
        $user = new User;
        
        $user->name = '';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
       
        
        $user->save();

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

        }

        return redirect()->intended('/');
        
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        /*return back()->withErrors([
            'email' => 'No aparece el email, revise bien su escritura'
        ]);*/
    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
