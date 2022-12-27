<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('nama_sekolah');
            $table->text('jenis_sekolah');
            $table->text('nss_sekolah');
            $table->text('npsn_sekolah');
            $table->text('akreditasi_sekolah');
            $table->text('jurusan_sekolah');
            $table->text('izin_sekolah');
            $table->text('luas_sekolah');
            $table->text('alamat_sekolah');
            $table->text('kecamatan_sekolah');
            $table->text('kota_sekolah');
            $table->text('provinsi_sekolah');
            $table->text('telpon_sekolah');
            $table->text('web_sekolah');
            $table->text('emai_sekolah');
            $table->text('fax_sekolah');
            $table->text('kepala_sekolah');
            $table->text('nip_kepala_sekolah');
            $table->text('ttl_kepala_sekolah');
            $table->text('alamat_kepala_sekolah');
            $table->text('pendidikan_kepala_sekolah');
            $table->text('jurusan_kepala_sekolah');
            $table->text('visi_sekolah');
            $table->text('misi_sekolah');
            $table->text('deskripsi_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
