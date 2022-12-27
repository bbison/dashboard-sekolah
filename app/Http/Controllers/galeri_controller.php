<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\galeri;
use File;


class galeri_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin/galeri',[
        'galeri'=>galeri::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'keterangan'=>[''],
            'foto'=>['image','file'],
        ]);

        if($request->file('foto')){
            $validated['foto']=$request->file('foto')->store('foto-galeri');
        }
       
        galeri::create($validated);
        return redirect('/galeriadmin');
       
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/update_galeri',[
            'galeri'=>galeri::find($id)
        ]);
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
        $validated=$request->validate([
            'keterangan'=>[''],
            'foto'=>['image','file'],
        ]);
    
        
        if($request->file('foto')){
            $validated['foto']=$request->file('foto')->store('foto-postingan');
            $foto= galeri::find($id);
            File::delete('image/'.$foto->foto);

        }
        galeri::find($id)->update($validated);
        return redirect('/galeriadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto= galeri::find($id);
        File::delete('image/'.$foto->foto);
        $foto->delete();
        return redirect('/galeriadmin');
    }
}
