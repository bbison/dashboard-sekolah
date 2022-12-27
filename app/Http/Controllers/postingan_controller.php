<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\postingan;
use  \App\Models\kategori;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use File;

class postingan_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/postingan',[
            'post'=> postingan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_postingan',[
            'kategori'=>kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //@dd($request);
        $validated=$request->validate([
            'user_id'=>[''],
            'kategori_id'=>['required'],
            'foto'=>['image','file'],
            'body'=>['required'],
            'judul'=>['required'],
            'slug'=>['']
        ]);
        $validated['user_id']=auth()->user()->id;

        if($request->file('foto')){
            $validated['foto']=$request->file('foto')->store('foto-postingan');
        }
       
        postingan::create($validated);
        return redirect('/postingan')->with('berhasil-tambah-partner', 'Partner Berhasil Ditambah');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'hello';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/update_postingan',[
            'postingan'=>postingan::find($id),
            'kategori'=>kategori::all()
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
    {//@dd($request);
        $validated=$request->validate([
            'user_id'=>[''],
            'kategori_id'=>['required'],
            'foto'=>['image','file'],
            'body'=>['required'],
            'judul'=>['required'],
            'slug'=>['']
        ]);
        $validated['user_id']=auth()->user()->id;
        
        if($request->file('foto')){
            $validated['foto']=$request->file('foto')->store('foto-postingan');
            $foto= postingan::find($id);
            File::delete('image/'.$foto->foto);

        }
        postingan::find($id)->update($validated);
        return redirect('/postingan')->with('berhasil-tambah-partner', 'Partner Berhasil Ditambah');
       
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto= postingan::find($id);
        File::delete('image/'.$foto->foto);
        $foto->delete();
        return redirect('/postingan');
    }


    public function slug(Request $request)
    {
    $slug = SlugService::createSlug(postingan::class, 'slug', $request->judul);
    return response()->json(['slug'=>$slug]);
    }
}
