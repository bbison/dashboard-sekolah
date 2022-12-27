<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
            'name'=>'Bagas',
            'email'=>'bbison2002@gmail.com',
            'password'=>bcrypt('12345678abC')
         ]);
         \App\Models\profile::create([
            'nama_sekolah'=>'Silahkan Update Data anda !',
            'jenis_sekolah'=>'Silahkan Update Data anda !',
            'nss_sekolah'=>'Silahkan Update Data anda !',
            'npsn_sekolah'=>'Silahkan Update Data anda !',
            'akreditasi_sekolah'=>'Silahkan Update Data anda !',
            'jurusan_sekolah'=>'Silahkan Update Data anda !',
            'izin_sekolah'=>'Silahkan Update Data anda !',
            'luas_sekolah'=>'Silahkan Update Data anda !',
            'alamat_sekolah'=>'Silahkan Update Data anda !',
            'kecamatan_sekolah'=>'Silahkan Update Data anda !',
            'kota_sekolah'=>'Silahkan Update Data anda !',
            'provinsi_sekolah'=>'Silahkan Update Data anda !',
            'telpon_sekolah'=>'Silahkan Update Data anda !',
            'web_sekolah'=>'Silahkan Update Data anda !',
            'emai_sekolah'=>'Silahkan Update Data anda !',
            'fax_sekolah'=>'Silahkan Update Data anda !',
            'kepala_sekolah'=>'Silahkan Update Data anda !',
            'nip_kepala_sekolah'=>'Silahkan Update Data anda !',
            'ttl_kepala_sekolah'=>'Silahkan Update Data anda !',
            'alamat_kepala_sekolah'=>'Silahkan Update Data anda !',
            'pendidikan_kepala_sekolah'=>'Silahkan Update Data anda !',
            'jurusan_kepala_sekolah'=>'Silahkan Update Data anda !',
            'visi_sekolah'=>'Silahkan Update Data anda !',
            'misi_sekolah'=>'Silahkan Update Data anda !',
            'deskripsi_sekolah'=>'Silahkan Update Data anda !'
         ]);
        
    }
}
