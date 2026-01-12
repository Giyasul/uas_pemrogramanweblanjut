<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kuliners', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kuliner');
            $table->string('asal_daerah'); // Lombok Barat
            $table->string('kategori'); // Makanan / Minuman / Jajanan
            $table->string('gambar')->nullable();
            $table->text('deskripsi'); // artikel kuliner panjang
            $table->decimal('harga_rata_rata', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuliners');
    }
};
