<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Opini;

class OpiniSeeder extends Seeder
{
    public function run()
    {
        Opini::insert([
            [
                'judul' => 'Plecing Kangkung dan Identitas Rasa Lombok',
                'kategori' => 'Opini Kuliner',
                'penulis' => 'Redaksi Kuliner',
                'gambar' => 'plecing.jpg',
                'isi' => "Plecing kangkung bukan sekadar makanan pendamping, tetapi simbol kesederhanaan masyarakat Lombok. 
Sambal pedas yang kuat mencerminkan karakter masyarakat yang berani dan terbuka.

Di Lombok Barat, plecing sering hadir dalam acara keluarga hingga hajatan besar. 
Hal ini menunjukkan bahwa kuliner menjadi bagian dari kehidupan sosial.

Sayangnya, modernisasi membuat generasi muda mulai melupakan makna di balik makanan tradisional.
Perlu peran media dan e-koran untuk menjaga eksistensi kuliner lokal."
            ],

            [
                'judul' => 'Ayam Taliwang: Lebih dari Sekadar Pedas',
                'kategori' => 'Opini Kuliner',
                'penulis' => 'Redaksi Kuliner',
                'gambar' => 'taliwang.jpg',
                'isi' => "Ayam Taliwang dikenal luas karena rasa pedasnya yang khas. 
Namun di balik itu, terdapat filosofi keberanian dan ketegasan.

Proses memasak yang detail menunjukkan kesabaran dan ketelitian masyarakat Lombok Barat.
Kuliner ini menjadi identitas daerah yang mendunia.

Jika dikelola dengan baik, Ayam Taliwang bisa menjadi ikon ekonomi kreatif daerah."
            ],

            [
                'judul' => 'Beberuk Terong dan Budaya Makan Sehat',
                'kategori' => 'Opini Kuliner',
                'penulis' => 'Redaksi Kuliner',
                'gambar' => 'beberuk.jpg',
                'isi' => "Beberuk terong mengajarkan kesederhanaan dan kesehatan.
Bahan mentah yang segar menjadi ciri khas kuliner ini.

Di tengah tren makanan instan, beberuk hadir sebagai alternatif alami.
Nilai ini sejalan dengan gaya hidup sehat masa kini.

Kuliner tradisional seharusnya diposisikan sebagai solusi, bukan sekadar nostalgia."
            ],
        ]);
    }
}
