<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('e_korans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('edisi'); // contoh: Edisi Januari 2026
            $table->date('tanggal_terbit');
            $table->string('penerbit');
            $table->string('gambar_sampul')->nullable();
            $table->text('deskripsi'); // penjelasan isi e-koran
            $table->string('file_pdf')->nullable(); // file e-koran
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('e_korans');
    }
};
