<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaLokalSeeder extends Seeder
{
    public function run()
    {
        DB::table('berita')->insert([

            [
                'Berita' => 'Pemerintah Kabupaten (Pemkab) Lombok Barat Perbaiki Jalan Desa',
                'kategori' => 'Berita Lokal',
                'gambar' => 'jalan-desa.jpg',
                'isi' => "Pemerintah Kabupaten Lombok Barat terus melakukan perbaikan jalan desa sebagai upaya meningkatkan aksesibilitas masyarakat. 
                          Perbaikan ini difokuskan pada jalur penghubung antar desa yang selama ini mengalami kerusakan.
                          Kondisi jalan yang baik diharapkan dapat memperlancar aktivitas ekonomi, pendidikan, dan pelayanan kesehatan. 
                          Masyarakat menyambut baik program ini karena sangat membantu mobilitas sehari-hari.
                          Pemkab Lombok Barat mengajak masyarakat untuk ikut menjaga fasilitas jalan agar dapat digunakan dalam jangka panjang."
            ],
            [
                'Berita' => 'Pasar Tradisional Gerung Mulai Ramai',
                'kategori' => 'Berita Lokal',
                'gambar' => 'pasar-gerung.jpg',
                'isi' => "Aktivitas jual beli di Pasar Tradisional Gerung mulai menunjukkan peningkatan. 
                          Pedagang dan pembeli kembali beraktivitas seperti biasa setelah kondisi ekonomi membaik.
                          Berbagai kebutuhan pokok tersedia dengan harga yang relatif stabil.
                          Pasar tradisional masih menjadi pusat ekonomi masyarakat Lombok Barat.
                          Pemerintah daerah terus berupaya menjaga kebersihan dan kenyamanan pasar."
            ],
            [
                'Berita' => 'Festival Budaya Lingsar Kembali Digelar',
                'kategori' => 'Berita Lokal',
                'gambar' => 'festival-lingsar.jpg',
                'isi' => "Festival Budaya Lingsar kembali digelar sebagai bentuk pelestarian tradisi dan budaya lokal.
                          Kegiatan ini menarik perhatian masyarakat dan wisatawan.
                          Berbagai pertunjukan seni dan ritual adat ditampilkan dalam festival tersebut. 
                          Acara ini juga menjadi sarana edukasi budaya bagi generasi muda.
                          Pemerintah daerah berharap festival ini dapat mendukung sektor pariwisata Lombok Barat."
            ],
            [
                'Berita' => 'Nelayan Senggigi Manfaatkan Cuaca Baik',
                'kategori' => 'Berita Lokal',
                'gambar' => 'nelayan-senggigi.jpg',
                'isi' => "Nelayan di kawasan Senggigi memanfaatkan cuaca laut yang baik untuk melaut. 
                          Hasil tangkapan ikan meningkat dibandingkan hari sebelumnya.
                          Ikan segar langsung dipasarkan ke pasar lokal dan restoran. 
                          Aktivitas ini menjadi sumber penghidupan utama masyarakat pesisir.
                          Nelayan tetap diimbau untuk memperhatikan kondisi cuaca demi keselamatan."
            ],
            [
                'Berita' => 'Program Kebersihan Lingkungan Terus Digalakkan',
                'kategori' => 'Berita Lokal',
                'gambar' => 'kebersihan-desa.jpg',
                'isi' => "Program kebersihan lingkungan terus digalakkan di berbagai desa di Lombok Barat. 
                          Kegiatan gotong royong rutin dilakukan oleh warga.
                          Tujuan program ini adalah menciptakan lingkungan yang sehat dan nyaman. 
                          Partisipasi masyarakat menjadi kunci keberhasilan.
                          Pemerintah desa memberikan apresiasi kepada warga yang aktif menjaga kebersihan."
            ],
            [
                'Berita' => 'Pelatihan UMKM Digelar di Lombok Barat',
                'kategori' => 'Berita Lokal',
                'gambar' => 'pelatihan-umkm.jpg',
                'isi' => "Pelatihan UMKM digelar untuk meningkatkan kapasitas pelaku usaha lokal.
                          Materi pelatihan meliputi pemasaran dan pengelolaan keuangan.
                          Kegiatan ini diikuti oleh pelaku UMKM dari berbagai kecamatan. 
                          Diharapkan UMKM dapat lebih mandiri dan berkembang.
                          UMKM menjadi salah satu penopang ekonomi daerah."
            ],
            [
                'Berita' => 'Sekolah di Lombok Barat Laksanakan Kegiatan Literasi',
                'kategori' => 'Berita Lokal',
                'gambar' => 'literasi-sekolah.jpg',
                'isi' => "Sekolah-sekolah di Lombok Barat melaksanakan kegiatan literasi. 
                          untuk meningkatkan minat baca siswa. Program ini dilakukan secara rutin.
                          Guru dan siswa terlibat aktif dalam kegiatan tersebut. 
                          Buku bacaan disediakan oleh sekolah dan pemerintah daerah.
                          Literasi menjadi bagian penting dalam meningkatkan kualitas pendidikan."
            ],
            [
                'Berita' => 'Puskesmas Tingkatkan Pelayanan Kesehatan',
                'kategori' => 'Berita Lokal',
                'gambar' => 'puskesmas.jpg',
                'isi' => "Puskesmas di Lombok Barat terus meningkatkan pelayanan kesehatan kepada masyarakat. 
                          Fasilitas dan tenaga medis ditingkatkan.
                          Masyarakat diimbau untuk rutin memeriksakan kesehatan. 
                          Pelayanan yang baik menjadi prioritas pemerintah daerah.
                          Kesehatan masyarakat adalah tanggung jawab bersama."
            ],
            [
                'Berita' => 'Petani Mulai Panen Padi',
                'kategori' => 'Berita Lokal',
                'gambar' => 'panen-padi.jpg',
                'isi' => "Petani di Lombok Barat mulai memasuki masa panen padi. 
                          Hasil panen tahun ini dinilai cukup baik.
                          Cuaca yang mendukung menjadi faktor utama keberhasilan panen. 
                          Pemerintah daerah memberikan pendampingan kepada petani.
                          Pertanian tetap menjadi sektor penting di Lombok Barat."
            ],
            [
                'Berita' => 'Pemuda Lombok Barat Aktif dalam Kegiatan Sosial',
                'kategori' => 'Berita Lokal',
                'gambar' => 'pemuda-sosial.jpg',
                'isi' => "Pemuda Lombok Barat aktif terlibat dalam berbagai kegiatan sosial. 
                          Kegiatan ini meliputi bakti sosial dan bantuan kemanusiaan.
                          Keterlibatan pemuda menunjukkan kepedulian terhadap lingkungan sekitar. 
                          Pemerintah daerah mendukung inisiatif positif ini.
                          Pemuda diharapkan terus berperan dalam pembangunan sosial."
            ],
            [
                'judul' => 'Desa Wisata Mulai Berkembang',
                'kategori' => 'Berita Lokal',
                'gambar' => 'desa-wisata.jpg',
                'isi' => "Beberapa desa wisata di Lombok Barat mulai berkembang dan menarik kunjungan wisatawan. 
                          Potensi alam dan budaya menjadi daya tarik utama.
                          Pengelolaan desa wisata dilakukan bersama masyarakat. 
                          Dampak ekonomi mulai dirasakan oleh warga.
                          Desa wisata diharapkan menjadi sumber pendapatan baru."
            ],
            [
                'Berita' => 'Pelayanan Administrasi Desa Ditingkatkan',
                'kategori' => 'Berita Lokal',
                'gambar' => 'administrasi-desa.jpg',
                'isi' => "Pelayanan administrasi desa di Lombok Barat terus ditingkatkan. 
                          Proses pelayanan dibuat lebih cepat dan transparan.
                          Digitalisasi administrasi mulai diterapkan di beberapa desa. 
                          Hal ini memudahkan masyarakat dalam mengurus dokumen.
                          Pelayanan publik yang baik menjadi prioritas pemerintah desa."
            ],
            [
                'Berita' => 'Kegiatan Keagamaan Berlangsung Khidmat',
                'kategori' => 'Berita Lokal',
                'gambar' => 'kegiatan-keagamaan.jpg',
                'isi' => "Kegiatan keagamaan di Lombok Barat berlangsung dengan khidmat. 
                          Masyarakat mengikuti rangkaian acara dengan tertib.
                          Toleransi antar umat beragama tetap terjaga. 
                          Situasi keamanan selama kegiatan berlangsung kondusif.
                          Kegiatan ini mempererat hubungan sosial masyarakat."
            ],
            [
                'Berita' => 'Peningkatan Keamanan Lingkungan',
                'kategori' => 'Berita Lokal',
                'gambar' => 'keamanan-lingkungan.jpg',
                'isi' => "Peningkatan keamanan lingkungan dilakukan melalui ronda malam dan koordinasi warga. 
                          Kegiatan ini bertujuan menjaga ketertiban.
                          Peran aktif masyarakat sangat dibutuhkan. 
                          Aparat keamanan juga terus melakukan patroli.
                          Lingkungan aman mendukung aktivitas masyarakat."
            ],
            [
                'Berita' => 'Gotong Royong Warga Masih Terjaga',
                'kategori' => 'Berita Lokal',
                'gambar' => 'gotong-royong.jpg',
                'isi' => "Budaya gotong royong masih terjaga di Lombok Barat. 
                          Warga saling membantu dalam berbagai kegiatan desa.
                          Gotong royong mempererat hubungan sosial dan kebersamaan. 
                          Nilai ini diwariskan secara turun-temurun.
                          Masyarakat diharapkan terus melestarikan budaya gotong royong."
            ],
        ]);
    }
}
