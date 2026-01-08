@extends('layout.layout')

@section('judul', 'Indeks Berita Nasional')

@section('konten')
<div class="container my-5">
    <div class="row">
        
        <div class="col-lg-8">
            <h2 class="fw-bold mb-4 border-bottom pb-2 text-primary text-uppercase" style="letter-spacing: 2px;">
                Berita Nasional
            </h2>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{asset('images/dpr.jpg')}} class="card-img-top" alt="IKN">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Pembangunan IKN Berlanjut</h5>
                            <p class="card-text text-muted small">Update terbaru mengenai progres pembangunan infrastruktur di ibu kota baru...</p>
                            <a href="#" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <img src={{asset('images/uang.jpg')}} class="card-img-top" alt="Ekonomi">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ekspor RI Meningkat Tajam</h5>
                            <p class="card-text text-muted small">Laporan neraca perdagangan Indonesia menunjukkan surplus di awal tahun...</p>
                            <a href="#" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="p-4 bg-light rounded shadow-sm">
                <h4 class="fw-bold mb-3 text-dark border-start border-4 border-primary ps-2">
                    Berita Terpopuler
                </h4>
                
                <div class="mb-3 pb-3 border-bottom">
                    <a href="#" class="text-decoration-none text-dark">
                        <h6 class="fw-bold mb-1">Polisi Amankan Demo Buruh di Jakarta</h6>
                        <small class="text-muted">2 Jam yang lalu</small>
                    </a>
                </div>

                <div class="mb-3 pb-3 border-bottom">
                    <a href="#" class="text-decoration-none text-dark">
                        <h6 class="fw-bold mb-1">Harga BBM Diprediksi Turun Bulan Depan</h6>
                        <small class="text-muted">5 Jam yang lalu</small>
                    </a>
                </div>

                <div class="mb-3">
                    <a href="#" class="text-decoration-none text-dark">
                        <h6 class="fw-bold mb-1">Jadwal Pertandingan Timnas Pekan Ini</h6>
                        <small class="text-muted">1 Hari yang lalu</small>
                    </a>
                </div>

                <a href="#" class="btn btn-outline-dark btn-sm w-100 mt-3">Lihat Semua Populer</a>
            </div>
        </div>

    </div> </div>
@endsection