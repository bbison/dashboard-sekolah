<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanDanBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan_dan_biayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->text('status_pembayaran')->default('Belum Lunas');
            $table->text('keterangan_pembayaran')->nullable();
            $table->text('jumlah_pembayaran')->default('500000');
            $table->date('tanggal_pembayaran')->nullable();
            $table->text('tahun_ajaran')->nullable();
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
        Schema::dropIfExists('tagihan_dan_biayas');
    }
}
