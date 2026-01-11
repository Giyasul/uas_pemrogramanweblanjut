<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EKoranSeeder extends Seeder
{
    public function run()
    {
        DB::table('e_koran')->insert([

            [
                'E-Koran' => 'Transformasi Media Cetak ke E-Koran Digital',
                'gambar' => 'ekoran-digital.jpg',
                'isi' => "Perkembangan teknologi mendorong media cetak beralih ke bentuk e-koran digital. 
                          Perubahan ini memudahkan masyarakat mengakses informasi kapan saja dan di mana saja. 
                          E-koran juga mengurangi biaya produksi cetak. 
                          Digitalisasi menjadi langkah strategis bagi keberlanjutan media daerah."
            ],
            [
                'E-Koran' => 'Peran E-Koran dalam Penyebaran Informasi Daerah',
                'gambar' => 'ekoran-informasi.jpg',
                'isi' => "E-koran berperan penting dalam menyebarkan informasi daerah secara cepat dan luas. 
                          Berita dapat diakses oleh masyarakat lokal maupun perantau. 
                          Kecepatan distribusi menjadi keunggulan utama e-koran. 
                          Hal ini mendukung keterbukaan informasi publik."
            ],
            [
                'E-Koran' => 'E-Koran sebagai Media Edukasi Masyarakat',
                'gambar' => 'ekoran-edukasi.jpg',
                'isi' => "Selain menyampaikan berita, e-koran berfungsi sebagai media edukasi. 
                          Konten edukatif seperti kesehatan dan pendidikan mudah diakses masyarakat. 
                          Informasi yang akurat meningkatkan literasi digital. 
                          E-koran berkontribusi dalam mencerdaskan pembaca."
            ],
            [
                'E-Koran' => 'Tantangan Kepercayaan Publik terhadap E-Koran',
                'gambar' => 'ekoran-kepercayaan.jpg',
                'isi' => "Kepercayaan publik menjadi tantangan utama e-koran di era digital. 
                          Maraknya berita palsu membuat masyarakat harus lebih selektif. 
                          Media e-koran dituntut menjaga akurasi dan etika jurnalistik. 
                          Kredibilitas menjadi kunci keberlangsungan media digital."
            ],
            [
                'E-Koraan' => 'E-Koran dan Efisiensi Distribusi Berita',
                'gambar' => 'ekoran-distribusi.jpg',
                'isi' => "Distribusi berita melalui e-koran jauh lebih efisien dibanding media cetak. 
                          Informasi dapat diperbarui secara real time. Pembaca tidak perlu menunggu edisi berikutnya. 
                          Hal ini menjadikan e-koran sangat relevan di era cepat."
            ],
            [
                'E-Koran' => 'Peran E-Koran dalam Transparansi Pemerintah',
                'gambar' => 'ekoran-transparansi.jpg',
                'isi' => "E-koran dapat menjadi sarana transparansi kebijakan pemerintah daerah. 
                          Informasi publik dapat diakses secara terbuka oleh masyarakat. 
                          Hal ini meningkatkan pengawasan publik. 
                          Media digital membantu mewujudkan pemerintahan yang akuntabel."
            ],
            [
                'E-Koran' => 'Akses Informasi Melalui E-Koran Daerah',
                'gambar' => 'ekoran-akses.jpg',
                'isi' => "E-koran mempermudah akses informasi bagi masyarakat daerah. 
                          Cukup menggunakan perangkat digital, berita dapat dibaca kapan saja. 
                          Hal ini sangat membantu masyarakat di wilayah terpencil. 
                          E-koran memperluas jangkauan informasi."
            ],
            [
                'E-Koran' => 'E-Koran sebagai Inovasi Media Lokal',
                'gambar' => 'ekoran-inovasi.jpg',
                'isi' => "Inovasi media lokal ditandai dengan hadirnya e-koran. 
                          Media daerah dapat menyesuaikan diri dengan perkembangan teknologi. 
                          Konten dapat disajikan lebih menarik dan interaktif. 
                          E-koran membuka peluang baru bagi media lokal."
            ],
            [
                'E-Koran' => 'Perubahan Pola Konsumsi Berita di Era Digital',
                'gambar' => 'ekoran-konsumsi.jpg',
                'isi' => "Masyarakat kini lebih memilih membaca berita secara digital. 
                          E-koran menjadi solusi praktis dan efisien. 
                          Perubahan ini mempengaruhi cara media menyajikan informasi. 
                          Adaptasi menjadi keharusan bagi media daerah."
            ],
            [
                'E-Koran' => 'E-Koran dan Kecepatan Informasi',
                'gambar' => 'ekoran-cepat.jpg',
                'isi' => "Kecepatan menjadi keunggulan utama e-koran. 
                          Informasi terbaru dapat langsung dipublikasikan. 
                          Hal ini membuat masyarakat selalu mendapatkan berita terkini. 
                          Kecepatan tetap harus diimbangi dengan akurasi."
            ],
            [
                'E-Koran' => 'Peran Jurnalis dalam Media E-Koran',
                'gambar' => 'ekoran-jurnalis.jpg',
                'isi' => "Jurnalis memiliki peran penting dalam menjaga kualitas e-koran. 
                          Etika jurnalistik harus tetap dijunjung tinggi. 
                          Informasi harus diverifikasi sebelum dipublikasikan. 
                          Profesionalisme jurnalis menentukan kualitas media."
            ],
            [
                'E-Koran' => 'E-Koran sebagai Arsip Digital Berita',
                'gambar' => 'ekoran-arsip.jpg',
                'isi' => "E-koran berfungsi sebagai arsip digital berita daerah. 
                         Informasi lama dapat diakses kembali dengan mudah. 
                         Hal ini bermanfaat bagi penelitian dan dokumentasi. 
                         Arsip digital meningkatkan nilai historis media."
            ],
            [
                'judul' => 'Pengaruh E-Koran terhadap Media Cetak',
                'gambar' => 'ekoran-media-cetak.jpg',
                'isi' => "Kehadiran e-koran mempengaruhi eksistensi media cetak. 
                          Banyak pembaca beralih ke platform digital. 
                          Media cetak dituntut beradaptasi agar tetap bertahan. 
                          Digitalisasi menjadi solusi utama."
            ],
            [
                'E-Koran' => 'E-Koran dan Partisipasi Pembaca',
                'gambar' => 'ekoran-partisipasi.jpg',
                'isi' => "E-koran memungkinkan interaksi langsung dengan pembaca. 
                          Kolom komentar dan umpan balik menjadi ruang diskusi. 
                          Partisipasi pembaca meningkatkan kualitas konten. 
                          Media menjadi lebih responsif terhadap publik."
            ],
            [
                'E-Koran' => 'Masa Depan E-Koran di Daerah',
                'gambar' => 'ekoran-masa-depan.jpg',
                'isi' => "E-koran diprediksi menjadi media utama di masa depan. 
                          Perkembangan teknologi mendukung pertumbuhan media digital. 
                          Media daerah harus terus berinovasi. E-koran menjadi kunci keberlanjutan informasi daerah."
            ],
        ]);
    }
}
