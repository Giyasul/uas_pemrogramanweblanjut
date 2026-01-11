<!DOCTYPE html>
<html>
<head>
    <title>{{ $berita->judul }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <a href="/berita" class="btn btn-secondary mb-3">← Kembali</a>

    <h4>{{ $berita->judul }}</h4>
    <span class="badge bg-success">{{ $berita->kategori }}</span>

    <img src="{{ asset('images/'.$berita->gambar) }}" class="img-fluid my-3">

    <p style="white-space: pre-line; text-align: justify;">
        {{ $berita->isi }}
    </p>
</div>

</body>
</html>
