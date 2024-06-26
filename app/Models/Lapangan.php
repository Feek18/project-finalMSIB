<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangan';

    protected $fillable = [
        'nama_lapangan',
        'harga_per_jam',
        'image',
        'deskripsi',
        'lokasi',
        'fasilitas',
    ];
}
