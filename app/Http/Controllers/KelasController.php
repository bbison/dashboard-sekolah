<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/kelas',[
            'kelas'=>kelas::all(),
            'edit_kelas'=>kelas::all(),
            'edit_user'=>user::all(),
            'user'=>user::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tambah_kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        kelas::create([
            'nama_kelas'=>$request['nama_kelas'],
            'user_id'=>$request['user_id']
        ]);

        return redirect('/kelas')->with('berhasil', 'Kelas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas)
    {
        return view('admin/edit_kelas',[
            'kelas'=>kelas::find($kelas)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
    }
    public function gantikelas(Request $request)
    {
        kelas::find($request['kelas_id'])->update([
            'nama_kelas'=>$request['nama_kelas']
        ]);

        return redirect('/kelas');
    }

    public function gantiwali(Request $request)
    {
        kelas::find($request['kelas_id'])->update([
            'user_id'=>$request['user_id']
        ]);

        return redirect('/kelas');
    }
}
