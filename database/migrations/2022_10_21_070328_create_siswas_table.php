<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('kelas_id')->default('0');
            $table->char('status')->default('Menunggu Verifikasi');

            $table->text('nama');
            $table->text('asal_sekolah');
            $table->text('tempat_lahir');
            $table->text('tanggal_lahir');
            $table->text('nisn');
            $table->text('jenis_kelamin');
            $table->text('tahun_lulus');
            $table->text('email');
            $table->text('nilai_rata');
            $table->text('kontak_siswa');

            $table->text('nama_ayah');
            $table->text('pekerjaan_ayah');
            $table->text('tempat_lahir_ayah');
            $table->text('tanggal_lahir_ayah');
            $table->text('kontak_ayah');

            $table->text('nama_ibu');
            $table->text('pekerjaan_ibu');
            $table->text('tempat_lahir_ibu');
            $table->text('tanggal_lahir_ibu');
            $table->text('kontak_ibu');

            $table->text('alamat_orangtua');
            $table->text('kode_pos');
            $table->text('kecamatan');
            $table->text('kabupaten');
            $table->text('provinsi');

            $table->text('nama_wali')->nullable();
            $table->text('pekerjaan_wali')->nullable();
            $table->text('status_wali')->nullable();
            $table->text('kontak_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->text('kode_pos_wali')->nullable();
            $table->text('kecamatan_wali')->nullable();
            $table->text('kabupaten_wali')->nullable();
            $table->text('provinsi_wali')->nullable();
            
            $table->text('pernyataan1')->default('Setuju');
            $table->text('pernyataan2')->defaylt('Setuju');


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
        Schema::dropIfExists('siswas');
    }
}
