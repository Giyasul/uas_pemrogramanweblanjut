@extends('layout.layout')
@section('judul', $kategori->nama_kategori ?? 'Indeks Berita')
@section('konten')

<style>
  /* =====================
   ZOOM GAMBAR BERITA
===================== */
.berita-img-wrapper {
    overflow: hidden;
    border-radius: 8px;
}

.berita-img-wrapper img {
    transition: transform .4s ease;
}

.berita-img-wrapper:hover img {
    transform: scale(1.1);
}

/* =====================
   JUDUL BERITA HOVER
===================== */
.berita-title {
    transition: color .25s ease;
}

.berita-title:hover {
    color: #0b4fb3; 
}

/* =====================
   SIDEBAR KATEGORI HOVER
===================== */
.sidebar-kategori a {
    transition: color .25s ease;
    color: #000;
}

.sidebar-kategori a:hover {
    color: #f59e0b; 
}

.berita-content {
    flex: 1;
    min-width: 0;
}

.berita-title {
    display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.sidebar-sticky{
    position: sticky;
    top: 70px; 
}

</style>

<div class="py-5">
    <nav class="navbar bg-body-secondary rounded mb-2">
  <div class="container-fluid">
    <span class="navbar-brand  fw-bold text-primary ">Indeks Berita</span>
  </div>
</nav>
  <div class="row">
    {{-- ===========================
        SIDEBAR KATEGORI
    ============================ --}}
    <div class="col-lg-3 ">
  <div class="card border-0 shadow-sm sidebar-sticky">
    <div class="card-body">
      <ul class="list-group list-group-flush sidebar-kategori ">
        @foreach ($kategoris as $kat)
          <li class="list-group-item">
            <a 
              href="{{ url('/kategori/'.$kat->id) }}" 
              class="text-decoration-none fw-bold
              {{ isset($kategori) && $kategori->id == $kat->id ? : '' }}">
              {{ $kat->nama_kategori }}
              <span class="float-end">&rsaquo;</span>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

    {{-- ===========================
        DAFTAR BERITA (PAGINATION)
    ============================ --}}
    <div class="col-lg-9 ">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          {{-- Looping daftar berita --}}
          @foreach ($beritas as $item)
            <div class="d-flex mb-4 pb-3 border-bottom">
              {{-- Gambar --}}
              <a href="{{ url('/berita/' . $item->id) }}" class="berita-img-wrapper">
                <img 
                  src="{{ asset($item->gambar) }}" 
                  alt="{{ $item->judul }}"
                  class="rounded me-3"
                  style="width: 200px; height: 130px; object-fit: cover;"
                >
              </a>

              {{-- Detail Berita --}}
              <div class="berita-content">
                <small class="text-danger fw-semibold d-block mb-1">
                  {{ $item->kategori->nama_kategori ?? '-' }}
                </small>
                <a href="{{ url('/berita/' . $item->id) }}" class="text-decoration-none text-dark">
                  <h6 class="fw-bold berita-title">
                    {{ Str::limit($item->judul, 150) }}
                  </h6>
                </a>
                <small class="text-muted">
                  {{ $item->kategori->nama_kategori ?? '-' }} |
                  {{ $item->created_at->diffForHumans() }}
                </small>
              </div>
            </div>
          @endforeach

          {{-- Pagination Links --}}
          <div class="mt-4 d-flex justify-content-center">
            {{ $beritas->links('pagination::bootstrap-5') }}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection