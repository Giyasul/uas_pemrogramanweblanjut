@extends('layout.layout')
@section('judul', 'Home')
@section('konten')

<style>
    .opini-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 16px;
    }

    .opini-img-link {
        display: block;
        border-radius: 14px;
        overflow: hidden;
    }

    .opini-img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        transition: transform 0.35s ease;
    }

    .opini-img-link:hover .opini-img {
        transform: scale(1.12);
    }

    .opini-title-link {
        display: block;
        margin-top: 8px;
        text-decoration: none;
    }
    .opini-title {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.3;
        color: #000;
        transition: color 0.2s ease;
    }

    .opini-title-link:hover .opini-title {
        color: #0d6efd;
    }

    @media (max-width: 992px) {
        .opini-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 576px) {
        .opini-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<div class="container my-4">
    <div class="opini-grid">
        @foreach ($beritas as $berita)
            <div>
                {{-- FOTO (ZOOM SENDIRI) --}}
                <a href="{{ url('/berita/' . $berita->id) }}" class="opini-img-link">
                    <img 
                        src="{{ asset($berita->gambar) }}"
                        alt="{{ $berita->judul }}"
                        class="opini-img"
                    >
                </a>
                {{-- JUDUL (WARNA BIRU SENDIRI) --}}
                <a href="{{ url('/berita/' . $berita->id) }}" class="opini-title-link">
                    <div class="opini-title">
                        {{ Str::limit($berita->judul, 65) }}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
