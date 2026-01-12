<?php
<h2>{{ $opini->judul }}</h2>
<p><b>Kategori:</b> {{ $opini->kategori }}</p>
<p><b>Penulis:</b> {{ $opini->penulis }}</p>

<img src="{{ asset('images/'.$opini->gambar) }}" width="300">

<p style="margin-top:15px; white-space: pre-line;">
    {{ $opini->isi }}
</p>

<a href="{{ url('/opini') }}">← Kembali</a>
