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
        Schema::table('daftar_proyek', function (Blueprint $table) {
            //
            $table->string('luas_tanah')->change();
            $table->string('luas_bangunan')->change();
            $table->string('tipe')->change();
            $table->string('jenis')->change();
            $table->string('lokasi')->change();

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
