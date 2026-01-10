@extends('layout.layout')
@section('judul', 'Kirim Artikel')
@section('konten')

<h2 class="fw-bold text-center py-5" style="color: #00487b">Kirim Artikel</h2>
<img src="{{ asset('images/opini.png') }}" alt="Opini" class="d-block mx-auto mb-4" style="width: 250px; height: auto;">
<div class=" mx-auto col-md-8"> 
     <p>
        Kolom opini.co memuat tulisan-tulisan ringan, orisinal, bukan hasil jiplak atau AI,
        dan tidak pernah dipublikasikan dalam bentuk apapun. Kami menerima naskah dari
        pembaca untuk beberapa rubrik di antaranya:
    </p>

    <p>
        Esai: Tema bebas dan menarik panjang naskah 500–750 kata<br>
        Puisi: Tema bebas minimal 1 judul dan maksimal 3 buah judul sekali kirim.<br>
        Cerpen: Tema bebas panjang naskah 750–1000 kata
    </p>

    <p><strong>Cara kirim:</strong></p>

    <p>
        Kirim naskah dalam bentuk word ke email: giyasulfirdaus@gmail.com<br>
        Subjek email di beri nama sesuai dengan kolom. (esai/puisi/cerpen)
    </p>

    <p>Sertakan juga di badan email:</p>

    <p>
        riwayat singkat penulis misal: Aldo, mahasiswa program studi agribisnis Universitas Gajah Mada<br>
        nama akun medsos<br>
        nomor telepon yang bisa dihubungi<br>
        foto cakep penulis (landscape), tampak wajah tapi jangan foto ijazah biar gak tegang.
        Foto sopan, jangan pegang rokok apalagi pegang mantan
    </p>

    <p>
        Semua tulisan yang masuk sepenuhnya hak cipta dan tanggung jawab kontributor/penulis,
        tidak menjadi hak/tanggung jawab redaksi opini.co
    </p>

    <p>
        Tim kami akan melakukan kurasi maksimal 7 kali 24 jam termasuk cek plagiasi dan
        screening AI maksimum 10 persen melalui website: duplichecker[dot]com dan
        zerogpt[dot]com, guna melihat apakah karya tersebut sesuai dengan filosofi kami.
    </p>

    <p>
        Tulisan yang layak muat, selanjutnya akan ditayangkan pada website dan media sosial opini mulut bebas.
    </p>

    <p>
        Silakan pantau dan follow media kami: website/IG, FB, Threads, dan Tiktok
        (opini mulut bebas) untuk mengetahui apakah tulisan Anda dimuat atau tidak.
    </p>
</div>

@endsection
