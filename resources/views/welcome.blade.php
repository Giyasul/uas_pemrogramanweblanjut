@extends('layout.layout')
@section('judul', 'Home')
@section('konten')

<style>
/* ================= GRID OPINI ================= */
.opini-grid{
    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:16px;
}
.opini-img{
    width:100%;
    height:120px;
    object-fit:cover;
    border-radius:14px;
    transition:.35s;
}
.opini-img:hover{transform:scale(1.1);}
.opini-title{
    font-size:14px;
    font-weight:600;
    margin-top:8px;
    color:#000;
    transition:.25s;
}
.opini-title:hover{color:#0b4fb3;}

/* ================= CARD + CAROUSEL ================= */
.carousel-item{position:relative;}
.carousel-img{
    height:420px;
    object-fit:cover;
    transition:.4s;
}
.carousel-img:hover{transform:scale(1.05);}

.carousel-overlay{
    position:absolute;
    bottom:0;
    left:0;
    right:0;
    padding:26px;
    background:linear-gradient(to top,rgba(0,0,0,.85),transparent);
    color:#fff;
}

.carousel-badge{
    background:#ffc107;
    color:#000;
    font-size:12px;
    padding:4px 8px;
    border-radius:6px;
    font-weight:700;
}

/* ================= SIDEBAR ================= */
.sidebar-img{
    width:75px;
    height:60px;
    object-fit:cover;
    border-radius:8px;
    transition:.35s;
}
.sidebar-img:hover{transform:scale(1.1);}
.sidebar-title{
    font-size:14px;
    font-weight:600;
    color:#000;
    transition:.25s;
}
.sidebar-title:hover{color:#0b4fb3;}

.pilihan-img{
    height:95px;
    object-fit:cover;
    border-radius:10px;
    transition:.35s;
}
.pilihan-img:hover{transform:scale(1.05);}

/* ================= POPULER ================= */
.populer-box{
    background:#eef7ff;
    padding:16px;
    border-radius:12px;
}
.populer-item{
    display:flex;
    justify-content:space-between;
    gap:10px;
    margin-bottom:12px;
}
.populer-img{
    width:80px;
    height:60px;
    object-fit:cover;
    border-radius:6px;
    transition:.3s;
}
.populer-img:hover{transform:scale(1.1);}
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
.populer-title:hover{color:#0b4fb3;}
.populer-number{
    color:#ff6a00;
    font-weight:700;
    font-size:14px;
    margin-right:2px;
}

/* ===== FOOTER CAROUSEL ===== */
.carousel-footer{
    background: linear-gradient(135deg,#0a3a8a,#05285e);
    color:#fff;
    border-top:1px solid rgba(255,255,255,.15);
}

.carousel-footer-title{
    color:#ffc107;
    font-weight:700;
    letter-spacing:.3px;
}

.carousel-footer a{
    color:#ffffff;
    font-weight:600;
    text-decoration:none;
    transition:.25s ease;
}

.carousel-footer a:hover{
    color:#ffb703; 
}
.footer-divider{
    border:0;
    height:1px;
    background:linear-gradient(
        to right,
        transparent,
        rgba(255,255,255,.5),
        transparent
    );
    margin:6px 0 10px;
}

/* ================= NEWS FEED ================= */
.news-feed{
    margin-top:30px;
}

.news-feed-item{
    display:grid;
    grid-template-columns: 1.2fr 1fr;
    gap:20px;
    padding:22px 0;
}

.news-feed-label{
    font-size:13px;
    font-weight:700;
    color:#ff6a00;
    margin-bottom:6px;
}

.news-feed-title{
    font-size:22px;
    font-weight:700;
    line-height:1.3;
    color:#fcfcfc;
    text-decoration:none;
    transition:.25s;
}

.news-feed-title:hover{
    color:#ffb703;
}

.news-feed-meta{
    font-size:13px;
    color:#6b7280;
    margin-top:6px;
}

.news-feed-img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:12px;
    transition:.4s;
}

.news-feed-img:hover{
    transform:scale(1.05);
}

.news-list-item{
    display:grid;
    grid-template-columns:200px 1fr;
    gap:20px;
    padding:20px 0;
    align-items:center;
}

.news-list-img-wrapper{
    overflow:hidden;
    border-radius:12px;
}

.news-list-img{
    width:200px;
    height:150px;
    object-fit:cover;
    transition:.4s ease;
}

.news-list-img-wrapper:hover .news-list-img{
    transform:scale(1.1);
}

.news-list-label{
    font-size:12px;
    font-weight:700;
    color:#ff6a00;
}

.news-list-title{
    display:block;
    font-size:18px;
    font-weight:700;
    color:#000;
    text-decoration:none;
}

.news-list-title:hover{
    color:#0b4fb3;
}



</style>

<div class="container my-4">

{{-- ================= GRID OPINI ================= --}}
<div class="opini-grid mb-5">
@foreach($beritas as $b)
<div>
    <a href="{{ url('/berita/'.$b->id) }}">
        <img src="{{ asset($b->gambar) }}" class="opini-img">
    </a>
    <a href="{{ url('/berita/'.$b->id) }}" class="text-decoration-none">
        <div class="opini-title">
            {{ Str::limit($b->judul,70) }}
        </div>
    </a>
</div>
@endforeach
</div>

<div class="row">

{{-- ================= CARD + CAROUSEL ================= --}}
<div class="col-lg-8">

<div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">

<div id="carouselExampleIndicators"
     class="carousel slide"
     data-bs-ride="carousel">

{{-- indicators --}}
<div class="carousel-indicators">
@foreach($carouselBerita as $i=>$c)
<button type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="{{ $i }}"
        class="{{ $i==0?'active':'' }}">
</button>
@endforeach
</div>

<div class="carousel-inner">
@foreach($carouselBerita as $i=>$item)
<div class="carousel-item {{ $i==0?'active':'' }}">
<a href="{{ url('/berita/'.$item->id) }}">
<img src="{{ asset($item->gambar) }}"
     class="d-block w-100 carousel-img">
</a>

<div class="carousel-overlay">
<span class="carousel-badge">Berita Seru</span>
<h4 class="fw-bold mt-2">
    <a href="{{ url('/berita/'.$item->id) }}" class="news-feed-title">
        {{ Str::limit($item->judul, 90) }}
    </a>
</h4>    
</div>

</div>
@endforeach
</div>

</div>

{{-- footer biru --}}
<div class="card-footer carousel-footer">
    <div class="carousel-footer-title mb-2">
        Berita Lainnya
    </div>
 <hr class="footer-divider">
    <div class="row">
        @foreach($beritaTerbaru->take(2) as $lain)
        <div class="col-md-6 mb-1">
            <a href="{{ url('/berita/'.$lain->id) }}">
                {{ Str::limit($lain->judul,65) }}
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>

<hr>

{{-- ================= NEWS FEED ================= --}}
<div class="news-feed">

<h5 class="fw-bold text-primary mb-4">
    News Feed
</h5>

@foreach($beritaFeed as $feed)
<div class="news-feed-item">

    {{-- KIRI: TEKS --}}
    <div>
        <div class="news-feed-label">
            {{ $feed->kategori->nama_kategori }}
        </div>

        <a href="{{ url('/berita/'.$feed->id) }}"
           class="news-feed-title">
            {{ $feed->judul }}
        </a>

        <div class="news-feed-meta">
            {{ $feed->kategori->nama_kategori }}
            | {{ \Carbon\Carbon::parse($feed->tanggal)->diffForHumans() }}
        </div>
    </div>

    {{-- KANAN: GAMBAR --}}
    <a href="{{ url('/berita/'.$feed->id) }}">
        <img src="{{ asset($feed->gambar) }}"
             class="news-feed-img">
    </a>

</div>
@endforeach

</div>

{{-- ===== LIST BAWAH (3 BERITA) ===== --}}
<div class="news-list">
@foreach($ArtikelPilihan as $item)
<div class="news-list-item">

    <a href="{{ url('/berita/'.$item->id) }}" class="news-list-img-wrapper">
        <img src="{{ asset($item->gambar) }}"
             class="news-list-img">
    </a>

    <div>
        <span class="news-list-label">
            {{ $item->kategori->nama_kategori }}
        </span>

        <a href="{{ url('/berita/'.$item->id) }}"
           class="news-list-title">
            {{ $item->judul }}
        </a>

        <div class="news-list-meta">
            {{ $item->kategori->nama_kategori }}
            | {{ \Carbon\Carbon::parse($item->tanggal)->diffForHumans() }}
        </div>
    </div>

</div>
@endforeach
</div>


</div>

{{-- ================= SIDEBAR ================= --}}
<div class="col-lg-4">

<a href="https://universitasbumigora.ac.id/" target="_blank">
    <img src="{{ asset('images/bumigora.jpg') }}"
         style="width:350px; height:auto;">
</a>
<hr>
<h5 class="fw-semibold text-primary mb-3">Berita Terbaru</h5>
@foreach($beritaTerbaru as $item)
<div class="d-flex mb-3">
<a href="{{ url('/berita/'.$item->id) }}">
<img src="{{ asset($item->gambar) }}" class="sidebar-img me-2">
</a>
<a href="{{ url('/berita/'.$item->id) }}"
   class="sidebar-title text-decoration-none">
{{ Str::limit($item->judul,80) }}
</a>
</div>
@endforeach

<hr>

<h6 class="fw-bold text-primary">Artikel Pilihan</h6>
<div class="row row-cols-2 g-2 mb-3">
@foreach($ArtikelPilihan as $a)
<div class="col">
<a href="{{ url('/berita/'.$a->id) }}">
<img src="{{ asset($a->gambar) }}" class="w-100 pilihan-img">
</a>
<a href="{{ url('/berita/'.$a->id) }}"
   class="sidebar-title text-decoration-none d-block mt-1">
{{ Str::limit($a->judul,45) }}
</a>
</div>
@endforeach
</div>

<hr>

<h6 class="fw-bold text-primary mb-3">Berita Terpopuler</h6>
<div class="populer-box">
@foreach($beritaTerbaru as $i=>$p)
<div class="populer-item">
<div>
<a href="{{ url('/berita/'.$p->id) }}" class="populer-title">
<span class="populer-number">{{ $i+1 }}.</span>
{{ Str::limit($p->judul,70) }}
</a>
</div>
<a href="{{ url('/berita/'.$p->id) }}">
<img src="{{ asset($p->gambar) }}" class="populer-img">
</a>
</div>
@endforeach
</div>
</div>
</div>
</div>

@endsection
