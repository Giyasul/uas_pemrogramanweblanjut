<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KulinerSeeder extends Seeder
{
    public function run()
    {
        DB::table('berita')->insert([

            [
                'Nama Kuliner' => 'Ayam Taliwang Khas Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'ayam-taliwang.jpg',
                'isi' => "Ayam Taliwang merupakan kuliner khas Lombok yang sangat populer, termasuk di wilayah Lombok Barat. Hidangan ini dikenal dengan cita rasa pedas dan gurih yang kuat, sehingga menjadi favorit masyarakat lokal maupun wisatawan.
                          Ayam yang digunakan biasanya ayam kampung muda agar teksturnya empuk. Proses pengolahan dimulai dengan melumuri ayam menggunakan bumbu khas yang terdiri dari cabai merah, bawang putih, bawang merah, terasi, gula aren, dan rempah lainnya.
                          Setelah dibumbui, ayam dibakar atau digoreng, lalu disiram sambal Taliwang. Di Lombok Barat, Ayam Taliwang sering disajikan dengan plecing kangkung dan nasi putih hangat.
                          Kuliner ini tidak hanya menjadi identitas daerah, tetapi juga berperan penting dalam mendukung UMKM dan perekonomian masyarakat setempat."
            ],
            [
                'Nama Kuliner' => 'Plecing Kangkung Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'plecing-kangkung.jpg',
                'isi' => "Plecing Kangkung adalah makanan pendamping khas Lombok Barat yang terkenal dengan sambalnya yang pedas dan segar. Kangkung yang digunakan biasanya berasal dari lahan pertanian lokal yang subur.
                         Kangkung direbus sebentar agar tetap renyah, lalu disiram sambal plecing yang terbuat dari cabai, tomat, terasi, dan perasan jeruk limau. Sambal ini menjadi ciri khas utama dari plecing kangkung.
                         Plecing kangkung sering disajikan bersama Ayam Taliwang atau ikan bakar. Hidangan ini mencerminkan kesederhanaan kuliner masyarakat Lombok Barat.
                         Selain lezat, plecing kangkung juga memiliki nilai gizi yang tinggi dan menjadi bagian penting dari budaya makan masyarakat setempat."
            ],
            [
                'Nama Kuliner' => 'Sate Bulayak Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'sate-bulayak.jpg',
                'isi' => "Sate Bulayak merupakan kuliner tradisional Lombok Barat yang unik karena disajikan dengan lontong bulayak, yaitu lontong yang dibungkus daun aren.
                          Sate ini biasanya menggunakan daging ayam atau sapi yang dibakar dengan bumbu khas. Keunikan sate bulayak terletak pada sausnya yang terbuat dari santan dan bumbu rempah, sehingga rasanya gurih dan sedikit pedas.
                          Bulayak menjadi pelengkap utama yang memberikan sensasi rasa berbeda dibanding lontong biasa. Hidangan ini banyak dijumpai di daerah Lingsar dan sekitarnya.
                          Sate Bulayak mencerminkan kekayaan kuliner tradisional Lombok Barat yang masih dilestarikan hingga kini."
            ],
            [
                'Nama Kuliner' => 'Beberuk Terong Khas Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'beberuk-terong.jpg',
                'isi' => "Beberuk Terong adalah makanan khas Lombok Barat yang berbahan dasar terong mentah atau setengah matang. Hidangan ini dikenal segar dan pedas.
                          Terong dipotong kecil lalu dicampur dengan sambal khas yang terbuat dari cabai, tomat, terasi, dan perasan jeruk limau. Perpaduan rasa pedas dan asam menjadikan hidangan ini sangat menggugah selera.
                          Beberuk terong biasanya disajikan sebagai lauk pendamping ikan bakar atau ayam goreng. Hidangan ini sangat cocok disantap saat cuaca panas.
                          Kuliner ini mencerminkan pola makan masyarakat Lombok Barat yang sederhana namun kaya rasa."
            ],
            [
                'Nama Kuliner' => 'Ikan Bakar Senggigi',
                'kategori' => 'Kuliner',
                'gambar' => 'ikan-bakar-senggigi.jpg',
                'isi' => "Ikan Bakar Senggigi merupakan kuliner khas daerah pesisir Lombok Barat. Ikan segar hasil tangkapan nelayan menjadi bahan utama hidangan ini.
                          Ikan dibumbui dengan rempah khas Lombok, lalu dibakar hingga matang sempurna. Aroma bakaran dan bumbu meresap menjadikan rasanya sangat khas.
                          Biasanya ikan bakar disajikan bersama sambal plecing dan nasi putih. Hidangan ini sangat populer di kawasan wisata Senggigi.
                          Selain menjadi menu favorit wisatawan, ikan bakar juga mendukung mata pencaharian nelayan lokal."
            ],
            [
                'Nama Kuliner' => 'Nasi Balap Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'nasi-balap.jpg',
                'isi' => "Nasi Balap merupakan makanan khas Lombok Barat yang sederhana namun kaya rasa. Hidangan ini terdiri dari nasi putih, ayam suwir, kacang kedelai, dan sambal.
                          Keunikan nasi balap terletak pada sambalnya yang pedas dan gurih. Penyajiannya cepat, sesuai dengan namanya yang berarti balapan.
                          Nasi balap sering dijadikan menu sarapan atau makan siang. Hidangan ini sangat digemari oleh masyarakat lokal.
                          Keberadaan nasi balap menunjukkan kreativitas kuliner masyarakat Lombok Barat."
            ],
            [
                'Nama Kuliner' => 'Ares Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'ares.jpg',
                'isi' => "Ares adalah makanan khas Lombok Barat yang berbahan dasar batang pisang muda. Hidangan ini biasanya dimasak menggunakan santan dan bumbu rempah.
                          Batang pisang diolah hingga empuk dan tidak pahit. Proses memasaknya membutuhkan ketelatenan agar rasa tetap lezat.
                          Ares juga sering disajikan pada acara adat dan perayaan tertentu. Hidangan ini memiliki nilai budaya yang kuat.
                          Kuliner ares mencerminkan pemanfaatan bahan alam secara maksimal oleh masyarakat Lombok Barat."
            ],
            [
                'Nama Kuliner' => 'Sambal Beberuk Tomat',
                'kategori' => 'Kuliner',
                'gambar' => 'beberuk-tomat.jpg',
                'isi' => "Beberuk Tomat merupakan sambal khas Lombok Barat yang segar dan pedas. 
                          Sambal ini berbahan dasar tomat segar.
                          Tomat dicampur dengan cabai, terasi, dan jeruk limau. Rasanya pedas, asam, dan segar.
                          Beberuk tomat sering dijadikan pelengkap ikan bakar atau ayam goreng. 
                          Hidangan ini sangat populer di kalangan masyarakat.
                          Sambal ini menunjukkan kekayaan cita rasa kuliner Lombok Barat."
            ],
            [
                'Nama Kuliner' => 'Pepes Ikan Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'pepes-ikan.jpg',
                'isi' => "Pepes ikan merupakan olahan ikan khas Lombok Barat
                          yang dimasak dengan bumbu rempah dan dibungkus daun pisang.
                          Ikan dibumbui lalu dikukus hingga matang. Aroma daun pisang menambah kelezatan hidangan ini.
                          Pepes ikan sering disajikan sebagai menu rumahan. Hidangan ini sehat dan bergizi.
                          Pepes ikan mencerminkan cara memasak tradisional masyarakat Lombok Barat."
            ],
            [
                'Nama Kuliner' => 'Sate Ikan Tanjung',
                'kategori' => 'Kuliner',
                'gambar' => 'sate-ikan.jpg',
                'isi' => "Sate Ikan Tanjung merupakan kuliner khas pesisir Lombok Barat. 
                          Sate ini terbuat dari daging ikan yang dibumbui rempah khas.
                          Daging ikan ditusuk dan dibakar hingga matang. Rasanya gurih dan sedikit pedas.
                          Sate ikan sering disajikan bersama nasi dan sambal. Hidangan ini digemari wisatawan.
                          Kuliner ini mencerminkan kekayaan hasil laut Lombok Barat."
            ],
            [
                'Nama Kuliner' => 'Jaje Tareq Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'jaje-tareq.jpg',
                'isi' => "Jaje Tareq adalah jajanan tradisional Lombok Barat 
                          yang terbuat dari tepung beras dan gula merah.
                          Teksturnya kenyal dengan rasa manis alami.
                          Jajanan ini biasanya disajikan pada acara adat.
                          Jaje Tareq menjadi simbol kebersamaan dalam masyarakat.
                          Kuliner tradisional ini masih dilestarikan hingga kini."
            ],
            [
                'Nama Kuliner' => 'Serabi Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'serabi.jpg',
                'isi' => "Serabi Lombok Barat memiliki cita rasa khas karena menggunakan santan dan gula aren.
                         Serabi dimasak menggunakan cetakan tradisional. 
                         Aromanya harum dan rasanya manis.
                         Kue ini sering dijadikan camilan sore hari.
                         Serabi mencerminkan kuliner tradisional yang sederhana namun lezat."
            ],
            [
                'Nama Kuliner' => 'Ikan Kuah Kuning',
                'kategori' => 'Kuliner',
                'gambar' => 'ikan-kuah-kuning.jpg',
                'isi' => "Ikan Kuah Kuning merupakan masakan khas Lombok Barat yang kaya rempah.
                          Kuahnya berwarna kuning dari kunyit. Rasanya segar dan gurih.
                          Hidangan ini sering disajikan dalam acara keluarga.
                          Kuliner ini mencerminkan kekayaan rempah Nusantara."
            ],
            [
                'Nama Kuliner' => 'Sambal Nyale',
                'kategori' => 'Kuliner',
                'gambar' => 'sambal-nyale.jpg',
                'isi' => "Sambal Nyale adalah kuliner khas Lombok Barat yang dibuat dari cacing laut nyale.
                          Nyale diolah dengan bumbu tradisional. Rasanya unik dan khas.
                          Sambal ini biasanya hadir saat festival Bau Nyale.
                          Kuliner ini memiliki nilai budaya yang tinggi."
            ],
            [
                'Nama Kuliner' => 'Kue Lupis Lombok Barat',
                'kategori' => 'Kuliner',
                'gambar' => 'lupis.jpg',
                'isi' => "Kue lupis adalah jajanan tradisional Lombok Barat yang terbuat dari beras ketan.
                          Disajikan dengan parutan kelapa dan gula merah cair. Rasanya manis dan legit.
                          Kue ini sering dijadikan camilan keluarga.
                          Lupis mencerminkan kesederhanaan kuliner tradisional."
            ],

        ]);
    }
}
