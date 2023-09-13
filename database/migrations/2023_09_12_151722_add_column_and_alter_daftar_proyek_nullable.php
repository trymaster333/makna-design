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
            $table->string('data_penunjang')->nullable()->change();
            $table->string('nama_file')->after('data_penunjang')->nullable();
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
