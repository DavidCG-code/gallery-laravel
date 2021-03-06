<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use App\Models\User;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();

      
        return view('home', compact('gallery'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
            if($request->hasFile('image')){

                $filename = $request->image->getClientOriginalName();
    
                $images = new Gallery;
    
                $images->image = $filename;
                $images->title = $request->title;
                $images->description = $request->description;
                $images->user_id = Auth::user()->id;
    
                $images->save();
     
    
                $path = $request->file('image')->storeAs('public/images', $filename);
    
            }
        
        return \redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $image = Gallery::findOrFail($id);

        $users = $image->user()->get();

        $author = \json_decode($users[0]);

        
        return view('show',[
            'image' => $image,
            'author' => $author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $image = Gallery::find($id);
      dd($image);
      //$image->delete();
      //return redirect('/');
    }
}
