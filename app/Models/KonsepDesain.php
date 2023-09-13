<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsepDesain extends Model
{
    use HasFactory;

    public $table = "konsep_desain";
    protected $fillable = [
        'judul',
        'detail',
        'cover',
    ];
}
