
<?php
<h1>Kolom Opini</h1>

@foreach($opini as $item)
    <h3>{{ $item->judul }}</h3>
    <p><i>{{ $item->kategori }} | {{ $item->penulis }}</i></p>
    <p>{{ Str::limit($item->isi, 200) }}</p>

    <a href="{{ url('/opini/'.$item->id) }}">Baca Selengkapnya</a>
    <hr>
@endforeach
