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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('jenis_ruangan');
            $table->string('image_ruangan')->nullable();
            $table->integer('kursi')->nullable()->default(0);
            $table->integer('smart_tv')->nullable()->default(0);
            $table->integer('layar_proyektor')->nullable()->default(0);
            $table->integer('lcd_proyektor')->nullable()->default(0);
            $table->integer('ac')->nullable()->default(0);
            $table->integer('papan_tulis')->nullable()->default(0);
            $table->integer('kapasitas')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
