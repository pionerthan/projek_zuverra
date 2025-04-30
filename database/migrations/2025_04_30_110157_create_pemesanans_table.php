<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pemesanans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('nomor_telepon');
        $table->string('email');
        $table->date('tanggal_checkin');
        $table->date('tanggal_checkout');
        $table->string('metode_pembayaran');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
