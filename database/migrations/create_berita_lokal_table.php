<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('berita_lokals', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori'); // Politik, Sosial, Budaya, dll
            $table->string('lokasi'); // Lombok Barat
            $table->string('penulis');
            $table->string('gambar')->nullable();
            $table->text('isi_berita'); // isi berita panjang
            $table->date('tanggal_terbit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('berita_lokals');
    }
};
