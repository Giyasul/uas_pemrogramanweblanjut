<?php

namespace Database\Seeders;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Opini', 'Berita Lokal', 'Berita Nasional', 'E-Koran', 'Internasional', 'Kolom Opini', 'Kuliner', 'Olahraga', 'Politik'];

    foreach ($data as $kategori) {
        Kategori::create([
            'nama_kategori' => $kategori
        ]);
    }
    }
}
