<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas')->nullable();
            $table->string('nisn',10)->nullable();
            $table->date('tgl_bayar')->nullable();
            $table->string('bulan_dibayar',8)->nullable();
            $table->string('tahun_dibayar',4)->nullable();
            $table->integer('id_spp')->nullable();
            $table->integer('jumlah_bayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
