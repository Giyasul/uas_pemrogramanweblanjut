<h3> Kuliner Lombok </h3>

@foreach($kuliners as $k)
    <div>
        <img src="{{ asset('images/'.$k->gambar) }}" width="200">
        <h5>{{ $k->judul }}</h5>
        <a href="/kuliner/{{ $k->id }}">Detail</a>
    </div>
@endforeach
