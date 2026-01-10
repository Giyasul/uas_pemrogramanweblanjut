<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $beritas = [
            [
                'kategori_id' => 1,
                'judul' => 'Pernikahan Dini Masih Jadi Persoalan Serius',
                'isi' => 'Pernikahan dini masih menjadi isu sosial yang kompleks dan memerlukan perhatian serius dari berbagai pihak.',
                'gambar' => 'images/facebook.png',
                'tanggal' => now(),
            ],
            [
                'kategori_id' => 2,
                'judul' => 'Pendidikan Anak di Era Digital',
                'isi' => 'Kemajuan teknologi membawa dampak besar terhadap pola belajar dan pendidikan anak di Indonesia.',
                'gambar' => 'images/instagram.png',
                'tanggal' => now()->subDays(1),
            ],
            [
                'kategori_id' => 4,
                'judul' => 'Fenomena Pernikahan Dini di Daerah',
                'isi' => 'Beberapa daerah masih mencatat angka pernikahan dini yang cukup tinggi akibat faktor ekonomi dan budaya.',
                'gambar' => 'images/opini.png',
                'tanggal' => now()->subDays(2),
            ],
            [
                'kategori_id' => 3,
                'judul' => 'Peran Media Sosial dalam Membentuk Opini Publik',
                'isi' => 'Media sosial kini menjadi ruang utama dalam pembentukan opini publik di kalangan masyarakat.',
                'gambar' => 'images/youtube.png',
                'tanggal' => now()->subDays(3),
            ],
        ];

        foreach ($beritas as $berita) {
            Berita::create($berita);
        }
    }
}
