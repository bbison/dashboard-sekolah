<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\siswa;
use  \App\Models\tagihanDanBiaya;

class TagihanDanBiayaController extends Controller
{
    public function index(){
        return view ('admin/tagihanDanBiaya_index');
    }
    public function ajaxSearch($str){
        return view ('admin/tagihanDanBiaya_ajax',[
            'siswa'=>siswa::where('nama','like', '%'.$str.'%')
            ->orWhere('id','like', '%'.$str.'%')
            ->orWhere('nisn','like', '%'.$str.'%')
            ->get()
        ]);
    }
    public function tambahPembayaran($siswaid){
        return view('admin/tambahPembayaran',[
            'siswa'=>siswa::find($siswaid)
        ]);
    }
    public function updatePembayaran($tagihanId){

        tagihanDanBiaya::find($tagihanId)->update([
            'status_pembayaran'=>'Sudah Lunas',
            'tanggal_pembayaran'=>date('d-m-y h:i:s')
        ]);

        $tagihan =  tagihanDanBiaya::find($tagihanId);
        return redirect('/tagihan-dan-biaya/tambah-pembayaran/'.$tagihan->siswa_id);
    }
    public function batalkanPembayaran($tagihanId){

        tagihanDanBiaya::find($tagihanId)->update([
            'status_pembayaran'=>'Belum Lunas',
            'tanggal_pembayaran'=>null
        ]);

        $tagihan =  tagihanDanBiaya::find($tagihanId);
        return redirect('/tagihan-dan-biaya/tambah-pembayaran/'.$tagihan->siswa_id);
    }
}
