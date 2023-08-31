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
        Schema::create('peminjaman_ruangan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('nim');
            $table->string('keperluan');
            $table->dateTime('jam_mulai');
            $table->dateTime('jam_selesai');
            $table->tinyInteger('status')->default('0')->comment('0=Pending, 1=Approved');
            $table->bigInteger('user_id');
            $table->bigInteger('ruangan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_ruangan');
    }
};
