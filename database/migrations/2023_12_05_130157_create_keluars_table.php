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
        Schema::create('keluars', function (Blueprint $table) {
            $table->increments('id_keluar');
            $table->string('kode_keluar');
            $table->string('kode_product');
            $table->string('kode_supplier');
            $table->unsignedBigInteger('id');
            $table->integer('stok_keluar');
            $table->date('tgl_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluars');
    }
};
