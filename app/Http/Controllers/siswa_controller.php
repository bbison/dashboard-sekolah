<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\siswa;
use  \App\Models\kelas;
use  \App\Models\tagihanDanBiaya;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class siswa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/siswa',[
            'siswa'=> siswa::all(), 
            'siswa_id'=> siswa::all(), 
            'kelas'=>kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=>['required'],
            'asal_sekolah'=>['required'],
            'tempat_lahir'=>['required'],
            'tanggal_lahir'=>['required'],
            'nisn'=>['required'],
            'jenis_kelamin'=>['required'],
            'tahun_lulus'=>['required'],
            'email'=>['required'],
            'nilai_rata'=>['required'],
            'kontak_siswa'=>['required'],
            
            'nama_ayah'=>['required'],
            'pekerjaan_ayah'=>['required'],
            'tempat_lahir_ayah'=>['required'],
            'tanggal_lahir_ayah'=>['required'],
            'kontak_ayah'=>['required'],
    
            'nama_ibu'=>['required'],
            'pekerjaan_ibu'=>['required'],
            'tempat_lahir_ibu'=>['required'],
            'tanggal_lahir_ibu'=>['required'],
            'kontak_ibu'=>['required'],
    
            'alamat_orangtua'=>['required'],
            'kode_pos'=>['required'],
            'kecamatan'=>['required'],
            'kabupaten'=>['required'],
            'provinsi'=>['required'],
    
            'nama_wali'=>[''],
            'pekerjaan_wali'=>[''],
            'status_wali'=>[''],
            'kontak_wali'=>[''],
            'alamat_wali'=>[''],
            'kode_pos_wali'=>[''],
            'kecamatan_wali'=>[''],
            'kabupaten_wali'=>[''],
            'provinsi_wali'=>[''],
    
            'pernyataan1'=>['required'],
            'pernyataan2'=>['required'],
        ]);
        siswa::create($validated);
        return redirect('/');
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
          return view('admin/update_siswa',[
            'siswa'=>siswa::find($id)
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
            'nama'=>['required'],
            'alamat'=>['required'],
            'kelas'=>['required'],
            'tahun_masuk'=>['required']
        ]);
        siswa::find($id)->update($validated);
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::find($id)->delete();
        tagihanDanBiaya::where('siswa_id', $id)->delete();
        return redirect('/siswa');
    }

    public function prosesRegistrasi(Request $request){
        $validated = $request->validate([
            'nama'=>['required'],
            'asal_sekolah'=>['required'],
            'tempat_lahir'=>['required'],
            'tanggal_lahir'=>['required'],
            'nisn'=>['required','unique:siswas'],
            'jenis_kelamin'=>['required'],
            'tahun_lulus'=>['required'],
            'email'=>['required'],
            'nilai_rata'=>['required'],
            'kontak_siswa'=>['required'],
    
            'nama_ayah'=>['required'],
            'pekerjaan_ayah'=>['required'],
            'tempat_lahir_ayah'=>['required'],
            'tanggal_lahir_ayah'=>['required'],
            'kontak_ayah'=>['required'],
    
            'nama_ibu'=>['required'],
            'pekerjaan_ibu'=>['required'],
            'tempat_lahir_ibu'=>['required'],
            'tanggal_lahir_ibu'=>['required'],
            'kontak_ibu'=>['required'],
    
            'alamat_orangtua'=>['required'],
            'kode_pos'=>['required'],
            'kecamatan'=>['required'],
            'kabupaten'=>['required'],
            'provinsi'=>['required'],
    
            'nama_wali'=>[''],
            'pekerjaan_wali'=>[''],
            'status_wali'=>[''],
            'kontak_wali'=>[''],
            'alamat_wali'=>[''],
            'kode_pos_wali'=>[''],
            'kecamatan_wali'=>[''],
            'kabupaten_wali'=>[''],
            'provinsi_wali'=>[''],
    
            'pernyataan1'=>['required'],
            'pernyataan2'=>['required'],
        ]);

        siswa::create($validated);
        $siswa = siswa::firstWhere('nisn',$request['nisn']);

        $x = 1;
        while($x <=12) {
            tagihanDanBiaya::create([
                'siswa_id'=>$siswa->id,
                'keterangan_pembayaran'=>'Bulan-'.$x,
                'tahun_ajaran'=>date('Y').'/'.date('Y', strtotime('+1 year'))
            ]);
        $x++;
        } 

        return view('lihatForm',[
            's'=>$siswa
        ]);
    
    }

    public function downloadForm($id)
    {   
        $siswa=siswa::find($id);
        $pdf = PDF::loadview('printPendaftaran',['s'=>$siswa])->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->download($siswa->nama.'_'.$siswa->nisn.'.pdf');
    }


    public function telahKonfirmasi(Request $request){

        tagihanDanBiaya::create([
            'siswa_id'=>$request['nomer_pendaftaran']
        ]);
        return redirect('/');

    }


    public function detailTagihanSiswa($siswa_id)
    {
        return view('detailTagihanSiswa',[
            'siswa'=>siswa::find($siswa_id)
        ]);
    }

    public function ajaxSiswa($str){

        if($str==''){
            return redirect('/siswa');
        }
         return view ('admin/siswa_ajax',[
            'siswa'=>siswa::where('nama','like', '%'.$str.'%')
            ->orWhere('id','like', '%'.$str.'%')
            ->orWhere('nisn','like', '%'.$str.'%')
            ->get()
        ]);
    }

    public function updatekelas(Request $request){
        siswa::find($request['siswa_id'])->update([
            'kelas_id'=>$request['kelas_id']
        ]);
        return redirect('/siswa');
    }
   
}
