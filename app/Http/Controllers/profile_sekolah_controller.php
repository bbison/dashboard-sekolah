<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\profile;

class profile_sekolah_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard',[
            'profile'=>profile::find(1)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('admin/edit_profile_sekolah',[
            'profile'=>profile::find(1)
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

        $validated = $request->validate([
            'nama_sekolah'=>['required'],
            'jenis_sekolah'=>['required'],
            'nss_sekolah'=>['required'],
            'npsn_sekolah'=>['required'],
            'akreditasi_sekolah'=>['required'],
            'jurusan_sekolah'=>['required'],
            'izin_sekolah'=>['required'],
            'luas_sekolah'=>['required'],
            'alamat_sekolah'=>['required'],
            'kecamatan_sekolah'=>['required'],
            'kota_sekolah'=>['required'],
            'provinsi_sekolah'=>['required'],
            'telpon_sekolah'=>['required'],
            'web_sekolah'=>['required'],
            'emai_sekolah'=>['required'],
            'fax_sekolah'=>['required'],
            'kepala_sekolah'=>['required'],
            'nip_kepala_sekolah'=>['required'],
            'ttl_kepala_sekolah'=>['required'],
            'alamat_kepala_sekolah'=>['required'],
            'pendidikan_kepala_sekolah'=>['required'],
            'jurusan_kepala_sekolah'=> ['required'],
            'visi_sekolah'=> ['required'],
            'misi_sekolah'=> ['required'],
            'deskripsi_sekolah'=> ['required']
        ]);

        profile::find($id)->update($validated);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
