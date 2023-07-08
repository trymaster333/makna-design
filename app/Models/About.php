<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $table = "profil";
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'slogan',
        'deskripsi',
    ];
}