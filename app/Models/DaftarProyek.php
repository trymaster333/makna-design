<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarProyek extends Model
{
    use HasFactory;

    public $table = "daftar_proyek";
    protected $fillable = [
        'judul',
        'anggaran',
        'luas_tanah',
        'luas_bangunan',
        'tipe',
        'jenis',
        'lokasi',
        'tanggal',
        'keterangan',
        'data_penunjang',
        'nama_file',
        'status',
    ];
}
