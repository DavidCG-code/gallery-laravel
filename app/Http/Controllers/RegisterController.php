<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function registerView(){

        return \view('register');
    }

    public function register(Request $request){
        $user = new User;
        
        $user->name = $request->name;
        
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        if($request->hasFile('avatar')){

            $filename = $request->avatar->getClientOriginalName();

            $user->avatar = $filename;


            $path = $request->file('avatar')->storeAs('public/images', $filename);

        }else{
            $user->avatar = null;
        }
        
        $user->save();


        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

        }

        return \redirect()->intended('/');
    }

   


}
