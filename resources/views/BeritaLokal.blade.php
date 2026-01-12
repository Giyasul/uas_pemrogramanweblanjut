<?php
<h1>Berita Lokal Lombok Barat<h1/>
  @foreach($berita as $b)
  <h3>{{$b->judul}}<h3/>
  <p>{{$b->isi}}</p>
  @endforeach
