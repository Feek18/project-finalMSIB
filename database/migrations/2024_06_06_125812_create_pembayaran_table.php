<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->unique()->constrained('peminjaman');
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->foreignId('jadwal_id')->unique()->constrained('jadwal');
            $table->decimal('jumlah', 10, 2);
            $table->date('tanggal_pembayaran');
            $table->string('metode_pembayaran', 50);
            $table->string('no_rek', 50);
            $table->string('bukti_pembayaran', 50);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
