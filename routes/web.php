<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\profile_sekolah_controller;
use App\Http\Controllers\postingan_controller;
use App\Http\Controllers\kategori_controller;
use App\Http\Controllers\siswa_controller;
use App\Http\Controllers\guru_dan_karyawan_controller;
use App\Http\Controllers\galeri_controller;
use App\Http\Controllers\TagihanDanBiayaController;
use App\Http\Controllers\kelasController;


//dashboard
Route::get('/', [dashboard_controller::class,'index']);
Route::get('/cari', [dashboard_controller::class,'cari']);
Route::get('/postingan/slug', [postingan_controller::class,'slug']);
Route::get('/berita', [dashboard_controller::class,'berita']);
Route::get('/prestasi', [dashboard_controller::class,'prestasi']);
Route::get('/galeri', [dashboard_controller::class,'galeri']);
Route::get('/profile', [dashboard_controller::class,'profile']);
Route::get('/profile/visi-misi', [dashboard_controller::class,'visimisi']);
Route::get('/profile/sejarah', [dashboard_controller::class,'sejarah']);
Route::get('/profile/fasilitas', [dashboard_controller::class,'fasilitas']);
Route::get('/profile/guru-dan-karyawan', [dashboard_controller::class,'gurudankaryawan']);
Route::get('/artikel/{slug}', [dashboard_controller::class,'bacaArtikel']);

//ppdb
Route::get('/download-form/{id}', [siswa_controller::class,'downloadform']);
Route::post('/ppdb', [siswa_controller::class,'prosesRegistrasi']);
Route::get('/ppdb', [dashboard_controller::class,'daftar']);
Route::get('/login', [dashboard_controller::class,'login'])->name('login');
Route::post('/login', [dashboard_controller::class,'proses_login']);
Route::post('/logout', [dashboard_controller::class,'proses_logout']);

//admin
Route::get('/siswa/ajax/{str}', [siswa_controller::class,'ajaxSiswa']);
Route::get('/siswa/updatekelas', [siswa_controller::class,'updatekelas']);
Route::resource('/kelas', kelasController::class)->middleware('auth');
Route::post('/kelas/gantinama', [kelasController::class,'gantikelas'])->middleware('auth');
Route::post('/kelas/gantiwali', [kelasController::class,'gantiwali'])->middleware('auth');

//bendahara
Route::get('/tagihan-dan-pembayaran', [TagihanDanBiayaController::class,'index']);
Route::get('/tagihan-dan-pembayaran/ajax/{str}', [TagihanDanBiayaController::class,'ajaxSearch']);
Route::get('/tagihan-dan-biaya/tambah-pembayaran/{siswaid}', [TagihanDanBiayaController::class,'tambahPembayaran']);
Route::post('/validasi-pembayaran/{tagihanId}', [TagihanDanBiayaController::class,'updatePembayaran']);
Route::post('/batalkan-pembayaran/{tagihanId}', [TagihanDanBiayaController::class,'batalkanPembayaran']);


Route::resource('/dashboard', profile_sekolah_controller::class)->middleware('auth');
Route::resource('/postingan', postingan_controller::class)->middleware('auth');
Route::resource('/siswa', siswa_controller::class)->middleware('auth');
Route::resource('/guru-dan-karyawan', guru_dan_karyawan_controller::class)->middleware('auth');
Route::resource('/kategori', kategori_controller::class)->middleware('auth');
Route::resource('/galeriadmin', galeri_controller::class)->middleware('auth');
