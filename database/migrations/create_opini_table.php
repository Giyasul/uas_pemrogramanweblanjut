<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('opinis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori'); // Opini Kuliner, Opini E-Koran, dll
            $table->string('penulis');
            $table->string('gambar')->nullable();
            $table->text('isi'); // artikel panjang
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opinis');
    }
};
