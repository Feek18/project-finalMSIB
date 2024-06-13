<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id',
        'lapangan_id',
        'jadwal_id',
        'tanggal_peminjaman',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
