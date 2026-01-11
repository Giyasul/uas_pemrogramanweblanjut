<a href="/kuliner">Kembali</a>

<h3>{{ $kuliner->judul }}</h3>
<img src="{{ asset('images/'.$kuliner->gambar) }}" width="400">

<p style="white-space: pre-line">
{{ $kuliner->isi }}
</p>
