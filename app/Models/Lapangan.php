<?php

// app/Models/Lapangan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangan';

    protected $fillable = [
        'nama_lapangan',
        'lokasi',
        'tipe',
        'harga_per_jam',
    ];
}
