<?php

// app/Models/Jadwal.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'lapangan_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
