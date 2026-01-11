<!DOCTYPE html>
<html>
<head>
    <title>Portal Berita Lombok Barat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h3>Berita Lombok Barat</h3>

    <div class="row">
        @foreach($beritas as $b)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/'.$b->gambar) }}" class="card-img-top">
                <div class="card-body">
                    <span class="badge bg-primary">{{ $b->kategori }}</span>
                    <h6 class="mt-2">{{ $b->judul }}</h6>
                    <a href="/berita/{{ $b->id }}" class="btn btn-sm btn-outline-primary">
                        Baca
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
