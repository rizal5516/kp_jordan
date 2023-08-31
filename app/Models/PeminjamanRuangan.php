<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanRuangan extends Model
{
    use HasFactory;

    protected  $table = "peminjaman_ruangan";

    protected $fillable = [
        'nama',
        'nim',
        'keperluan',
        'ruangan',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'status',
        'user_id',
        'ruangan_id'
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id');
    }
}
