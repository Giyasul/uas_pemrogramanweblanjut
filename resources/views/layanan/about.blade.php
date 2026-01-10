@extends('layout.layout')
@section('judul', 'About')
@section('konten')

<h2 class="fw-bold text-center py-5" style="color: #00487b">About Us</h2>
<img src="{{ asset('images/opini.png') }}" alt="Opini" class="d-block mx-auto mb-4" style="width: 250px; height: auto;">
<div class=" mx-auto col-md-8">
    <p>
        <strong>Opini mulut bebas</strong> adalah platform media digital yang menyajikan beragam konten opini, isu sosial-politik, budaya, dan agama dengan pendekatan santai serta mudah dicerna. Melalui artikel-artikel yang dihadirkan, pembaca diajak untuk memahami berbagai topik terkini dengan perspektif yang segar, kritis, dan beragam, tanpa harus merasa terbebani oleh gaya bahasa yang kaku.
    </p>

    <p >
        Website ini mengedepankan konten yang relevan dan menghibur, sehingga pembaca tidak hanya memperoleh wawasan baru, tetapi juga menikmati pengalaman membaca yang menyenangkan. Opini mulut bebas meyakini bahwa gagasan yang disampaikan secara ringan namun akurat mampu memicu diskusi yang konstruktif serta menginspirasi pemikiran kritis, khususnya di kalangan anak muda.
    </p>

    <p >
        Selain artikel opini, Opini mulut bebas juga menyajikan esai, komentar, dan analisis yang dikemas secara mendalam namun tetap bersahabat. Dengan tampilan yang bersih dan navigasi yang sederhana, Opini mulut bebas hadir sebagai ruang yang nyaman bagi siapa saja yang ingin mengeksplorasi berbagai sudut pandang sambil bersantai minum kopi dan menikmati goreng pisang. Seperti tagline kami: <strong>Mulut Bebas</strong>.
    </p>
</div>

@endsection
