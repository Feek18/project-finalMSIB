<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('lapangan_id')->constrained('lapangan');
            $table->foreignId('jadwal_id')->constrained('jadwal');
            $table->date('tanggal_peminjaman');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
