<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapanganTable extends Migration
{
    public function up()
    {
        Schema::create('lapangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lapangan');
            $table->string('image')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('harga_per_jam')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lapangan');
    }
}
