@extends('layout.layout')
@section('judul', $berita->judul)
@section('konten')

<style>
    .judul-opini {
        text-align: center;
        font-size: 34px;
        font-weight:700;
        color: #0b4fb3;
    
    }

    .meta-opini {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 25px;
    }

    .kategori-opini {
        color: #f59e0b;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
    }

    .tanggal-opini {
        color: #9ca3af;
        font-size: 13px;
    }

    /* ===== SIDEBAR ===== */

    .sidebar-item {
        display: flex;
        margin-bottom: 14px;
    }

    /* FOTO ZOOM */
    .sidebar-img {
        width: 90px;
        height: 60px;
        object-fit: cover;
        border-radius: 6px;
        transition: transform 0.35s ease;
    }

    .sidebar-img:hover {
        transform: scale(1.12);
    }

    /* JUDUL BIRU */
    .sidebar-title {
     font-size: 14px;
        font-weight: 600;
        line-height: 1.3;
        color: #000;
        transition: color 0.2s ease;
    }

    .sidebar-title:hover {
        color: #083b87;
    }

  /* LINK KE HALAMAN BERITA */
.sidebar-more {
    display: block;
    text-align: center;
    margin-top: 15px;
    font-weight: 700;
    font-size: 14px;
    color: #f59e0b; /* sama kayak kategori */
    text-decoration: none;
    transition: color 0.25s ease;
}

.sidebar-more:hover {
    color: #000; /* jadi hitam pas hover */
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
                </span>
                <br>
                <span class="tanggal-opini">
                    {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('l, d F Y') }}
                </span>
            </div>

            <img 
                src="{{ asset($berita->gambar) }}" 
                class="img-fluid rounded mb-4"
                alt="{{ $berita->judul }}"
            >

            <div class="fs-6 lh-lg">
                {!! nl2br(e($berita->isi)) !!}
            </div>
        </div>

       {{-- SIDEBAR --}}
<div class="col-lg-4">

    <h5 class="fw-bold text-primary mb-3">
        Berita Terbaru
    </h5>

    @foreach ($beritaTerbaru as $item)
        <div class="sidebar-item">

            <a href="{{ url('/berita/' . $item->id) }}">
                <img 
                    src="{{ asset($item->gambar) }}"
                    class="sidebar-img me-2"
                    alt="{{ $item->judul }}"
                >
            </a>

            <a href="{{ url('/berita/' . $item->id) }}" class="text-decoration-none">
                <span class="sidebar-title">
                    {{ Str::limit($item->judul, 55) }}
                </span>
            </a>

        </div>
    @endforeach

    <a href="/" class="sidebar-more">
        Ke Halaman Berita 
    </a>

</div>


    </div>
</div>

@endsection
