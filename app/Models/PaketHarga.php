<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketHarga extends Model
{
    use HasFactory;

    public $table = "paket_harga";
    protected $fillable = [
        'judul',
        'deskripsi',
        'harga',
    ];
}