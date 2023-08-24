<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = "ruangans";

    protected $fillable = [
        'nama_ruangan',
        'jenis_ruangan',
        'image_ruangan',
        'kursi',
        'smart_tv',
        'layar_proyektor',
        'lcd_proyektor',
        'ac',
        'papan_tulis',
        'kapasitas'
    ];
}
