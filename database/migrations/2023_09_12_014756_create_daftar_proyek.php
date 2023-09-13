<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_proyek', function (Blueprint $table) {
            //
            $table->id();
            $table->string('judul');
            $table->string('anggaran');
            $table->text('luas_tanah');
            $table->text('luas_bangunan');
            $table->text('tipe');
            $table->text('jenis');
            $table->text('lokasi');
            $table->text('keterangan');
            $table->string('data_penunjang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daftar_proyek', function (Blueprint $table) {
            //
        });
    }
};
