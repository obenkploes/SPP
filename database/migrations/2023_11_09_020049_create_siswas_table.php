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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn',10)->nullable()->unique();
            $table->string('nis',8)->nullable();
            $table->string('nama',35)->nullable();
            $table->integer('id_kelas')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telp',13)->nullable();
            $table->integer('id_spp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
