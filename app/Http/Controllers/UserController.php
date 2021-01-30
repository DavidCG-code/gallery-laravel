<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return \view('profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($request->hasFile('avatar')){

            $filename = $request->avatar->getClientOriginalName();

            $user->avatar = $filename;


            $path = $request->file('avatar')->storeAs('public/images', $filename);

        }
        //
        $user->save();

        return \redirect('/');
    }

    public function upLoadAvatar(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);

        if($request->hasFile('avatar')){

            $filename = $request->avatar->getClientOriginalName();

            $user->avatar = $filename;


            $path = $request->file('avatar')->storeAs('public/images', $filename);

        }
    }

}
