@extends('layout.layout')
@section('judul', $berita->judul)
@section('konten')

<style>
.judul-opini{
    text-align:center;
    font-size:34px;
    font-weight:700;
    color:#0b4fb3;
}

.meta-opini{
    text-align:center;
    margin:10px 0 25px;
}

.kategori-opini{
    color:#f59e0b;
    font-weight:700;
    font-size:14px;
    text-transform:uppercase;
}

.tanggal-opini{
    color:#9ca3af;
    font-size:13px;
}

/* ===== SIDEBAR ===== */
.sidebar-item{
    display:flex;
    margin-bottom:14px;
}

.sidebar-img{
    width:90px;
    height:60px;
    object-fit:cover;
    border-radius:6px;
    transition:transform .35s ease;
}

.sidebar-img:hover{
    transform:scale(1.12);
}

.sidebar-title{
    font-size:14px;
    font-weight:600;
    line-height:1.3;
    color:#000;
    transition:color .2s ease;
}

.sidebar-title:hover{
    color:#083b87;
}

.sidebar-more{
    display:block;
    text-align:center;
    margin-top:15px;
    font-weight:700;
    font-size:14px;
    color:#f59e0b;
    text-decoration:none;
    transition:color .25s ease;
}

.sidebar-more:hover{
    color:#000;
}

/* ===== POPULER ===== */
.populer-box{
    background:#e6f8ff;
    border-radius:10px;
    padding:15px;
    margin-top:30px;
}

.populer-item{
    display:flex;
    justify-content:space-between;
    gap:10px;
    margin-bottom:14px;
}

.populer-left{
    flex:1;
}

.populer-number{
    font-weight:700;
    color:#ff6a00;
    font-size:14px;
    margin-right:2px;
}

.populer-title{
    display:block;
    font-size:14px;
    font-weight:600;
    line-height:1.3;
    color:#000;
    transition:color .2s ease;
     text-decoration:none;
     padding-left:18px;    
    text-indent:-18px; 
}

.populer-title:hover{
    color:#083b87;
}

.populer-img{
    width:85px;
    height:70px;
    object-fit:cover;
    border-radius:6px;
    transition:transform .3s ease;
}

.populer-img:hover{
    transform:scale(1.1);
}

.populer-more{
    display:inline-block;
    margin-top:10px;
    padding:8px 14px;
    background:#ff6a00;
    color:#fff;
    font-size:13px;
    font-weight:600;
    border-radius:6px;
    text-decoration:none;
}

.populer-more:hover{
    opacity:.9;
}
.pilihan-img{
    height:100px;
    object-fit:cover;
    border-radius:8px;
    transition:transform .35s ease;
}

.pilihan-img:hover{
    transform:scale(1.12);
}
.sidebar-wrapper{
    overflow: visible; /* PENTING */
}

.sidebar-sticky{
    position: sticky;
    top: 80px; /* sesuaikan tinggi navbar */
}


</style>

<div class="container my-4">
    <div class="row">

        {{-- KONTEN UTAMA --}}
        <div class="col-lg-8">
            <small class="text-muted">
                Home / {{ $berita->kategori->nama_kategori }}
            </small>

            <h1 class="judul-opini mt-3">
                {{ $berita->judul }}
            </h1>

            <div class="meta-opini">
                <span class="kategori-opini">
                    {{ $berita->kategori->nama_kategori }}
                </span><br>
                <span class="tanggal-opini">
                    {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('l, d F Y') }}
                </span>
            </div>

            <img src="{{ asset($berita->gambar) }}"
                 class="img-fluid rounded mb-4"
                 alt="{{ $berita->judul }}">

            <div class="fs-6 lh-lg">
                {!! nl2br(e($berita->isi)) !!}
            </div>
        </div>

        <div class="col-lg-4">

        <h5 class="fw-bold text-primary mb-3">Berita Terbaru</h5>

        @foreach ($beritaTerbaru as $item)
            <div class="sidebar-item">
                <a href="{{ url('/berita/'.$item->id) }}">
                    <img src="{{ asset($item->gambar) }}"
                         class="sidebar-img me-2"
                         alt="{{ $item->judul }}">
                </a>

                <a href="{{ url('/berita/'.$item->id) }}" class="text-decoration-none">
                    <span class="sidebar-title">
                        {{ Str::limit($item->judul, 80) }}
                    </span>
                </a>
            </div>
        @endforeach

        <a href="/" class="sidebar-more">
            Ke Halaman Berita
        </a>

        <hr>

        {{-- Artikel Pilihan --}}

    <h6 class="fw-bold text-primary mb-3">
        Artikel Pilihan
    </h6>

    <div class="row row-cols-2 g-3">
        @foreach ($ArtikelPilihan as $item)
            <div class="col">
                <div class="card border-0">

                    <a href="{{ url('/berita/' . $item->id) }}" class="overflow-hidden rounded">
                        <img 
                            src="{{ asset($item->gambar) }}" 
                            class="pilihan-img w-100"
                            alt="{{ $item->judul }}"
                        >
                    </a>

                    <div class="card-body p-2">
                        <a href="{{ url('/berita/' . $item->id) }}" class="text-decoration-none">
                            <p class="sidebar-title mb-0">
                                {{ Str::limit($item->judul, 65) }}
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    <a href="/" class="sidebar-more">
        Ke Halaman Berita
    </a>

     <hr>

        {{-- Populer --}}
        <div class="populer-box sidebar-sticky">
            <h6 class="fw-bold text-primary mb-3">Berita Terpopuler</h6>
            @foreach ($beritaTerbaru as $i => $item)
                <div class="populer-item">
                    <div class="populer-left">
                        <a href="{{ url('/berita/'.$item->id) }}" class="populer-title">
                            <span class="populer-number">{{ $i+1 }}.</span>
                            {{ Str::limit($item->judul, 90) }}
                        </a>
                    </div>
                    <a href="{{ url('/berita/'.$item->id) }}">
                        <img src="{{ asset($item->gambar) }}" class="populer-img">
                    </a>
                </div>
            @endforeach
             <a 
              href="{{ url('/beritanav') }}"
              class="populer-more{{ request()->is('beritanav') ? 'active' : '' }}">Lihat Selengkapnya
            </a>
         </div>
</div>
    </div>
</div>

@endsection
