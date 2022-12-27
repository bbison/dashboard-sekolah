<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  \App\Models\postingan;
use  \App\Models\kategori;
use  \App\Models\profile;
use  \App\Models\galeri;
use  \App\Models\siswa;

class dashboard_controller extends Controller
{
    public function index(){

        return view('index',[
            'berita'=>postingan::where('kategori_id','1')->latest()->limit(6)->get(),
            'prestasi'=>postingan::where('kategori_id','2')->latest()->limit(3)->get(),
            'profile'=>profile::find(1)
        ]);
    }
    public function berita(){
        return view('berita',[
            'beritas'=>postingan::where('kategori_id','1')->latest()->paginate(12),
            'profile'=>profile::find(1)
        ]);
    }
    
    public function prestasi(){
        return view('prestasi',[
            'prestasis'=>postingan::where('kategori_id','2')->latest()->paginate(12),
            'profile'=>profile::find(1)
        ]);
    }
    public function galeri(){
        return view('galeri',[
            'galeris'=>galeri::latest()->paginate(12),
        ]);
    }
    public function profile(){
        return view('profile',[
            'profile'=>profile::find(1)
        ]);
    }
    public function visimisi(){
        return view('visimisi');
    }
    public function sejarah(){
        return view('sejarah');
    }
    public function fasilitas(){
        return view('fasilitas');
    }
    public function gurudankaryawan(){
        return view('gurukaryawan');
    }
    public function daftar(){
        return view('pendaftaran');
    }
    public function login(){
        return view('admin/login');
    }
    public function proses_login(Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }
    echo "gagal ";
   
    }
    public function proses_logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

    public function bacaArtikel($slug){
        return view('bacaArtikel',[
            'artikel'=>postingan::where('slug',$slug)->get(),
            'beritaterbaru'=>postingan::where('kategori_id','1')->limit(5)->get(),
            'prestasiterbaru'=>postingan::where('kategori_id','2')->limit(5)->get(),
            'profile'=>profile::find(1)
        ]);
       
    }
    public function cari(){
        $getid=kategori::where('name', request('search'))->get();
        
       return view('cari',[
        'post'=>postingan::where('judul', 'like','%'.request('search').'%' )
            ->orWhere('body', 'like','%'.request('search').'%')
            ->get(),
        'profile'=>profile::find(1),
        'jumlah'=>postingan::where('judul', 'like','%'.request('search').'%' )
        ->orWhere('body', 'like','%'.request('search').'%')
        ->count(),
       ]);
    }

    public function api(){
        $siswa = siswa::all();
        return response(json_encode($siswa));
    }
}
