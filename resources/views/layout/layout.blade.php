<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
body {
    background-color: #f2f2f2; 
    font-family: Arial, sans-serif;
    color: #333;
}
.nav-opini .nav-link {
    color: #fff;
    padding: 10px 14px;
}
.nav-opini .nav-link:hover {
    color: #ffcc00; 
}

.nav-opini {
    background: linear-gradient(
        to right,
        #00487b,
        #0076ca
    );
}
.logo-opini {
  height: 200px;
  width: auto;
}

.home-gradient {
  font-weight: 700;
  text-decoration: none;

  background: linear-gradient(
    90deg,
    #3e079e,
    #fd0d35
  );

  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.home-gradient:hover {
  opacity: .85;
}

.topbar-separator {
  width: 1px;
  height: 30px;
  background: #ddd;
  margin: 0 15px;
}

.hashtag-link {
  color: #000;              
  text-decoration: none;
  font-weight: 600;
}

.hashtag-link:hover,
.hashtag-link:focus {
  color: #032b68;          
 
}

.footer-opini {
  background: #f2f2f2;
}

.footer-link li {
  margin-bottom: 6px;
}

.footer-link a {
  color: #505050;
  text-decoration: none;
  font-size: 15px;
}

.footer-link a:hover {
  color: #043277;
}

.footer-title {
  color: #000;     
  font-weight: 700;
}

.social-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  text-decoration: none;
  font-weight: bold;
}

.social-icon.fb { background: #1877f2; }
.social-icon.ig { background: #e1306c; }
.social-icon.pin { background: #bd081c; }
.social-icon.tw { background: #1da1f2; }
.social-icon.yt { background: #ff0000; }

.footer-bottom {
  background: #f2f2f2;
  border-top: 1px solid #ddd;
}

.footer-topline {
  position: relative;
  height: 4px;
  background: #032c6b; 
  margin-top: 60px;
}

.scroll-top-btn {
  position: absolute;
  top: -18px;
  left: 50%;
  transform: translateX(-50%);
  
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: none;

  background: #032c6b;
  color: #fff;
  font-size: 18px;
  font-weight: bold;

  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0,0,0,.2);
}

.scroll-top-btn:hover {
  background: #084298;
}
</style>

<body>
<!-- TOP BAR -->
<nav class="navbar fixed-top bg-white shadow-lg ">
    <div class="container">
        <div class="d-flex align-items-center gap-1 small fw-semibold">
            <a href="{{ url('/') }}" class="home-gradient d-flex align-items-center gap-1">
                HOME
            </a> 
            <span class="topbar-separator"></span>
            <span> 
                {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
            </span>
        </div>
    </div>
</nav>

    <main class="container bg-white p-4"> 

{{-- LOGO --}}
<div class="border-bottom bg-white">
    <a href="{{ url('/') }}" >
      <img src="{{ asset('images/opini.png') }}"
           class="logo-opini"
           alt="OPINI">
    </a>

</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg nav-opini rounded py-1" >
    <div class="container-fluid">
        <ul class="navbar-nav fw-bold">
            <li class="nav-item">
                <a class="nav-link " href="#">Indeks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Berita Lokal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Berita Nasional</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">E-Koran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Internasional</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kolom Opini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kuliner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Olahraga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Politik</a>
            </li>
        </ul>
    </div>
</nav>
<!-- HASHTAG BAR -->
<nav class="navbar navbar-expand-lg bg-body-secondary rounded py-2" >
  <div class="container-fluid">
    <ul class="navbar-nav gap-4 fw-semibold">
        <li class="nav-item">  
            <a href="#" class="hashtag-link">#berita lokal</a>
        </li>
          <li class="nav-item">  
            <a href="#" class="hashtag-link">#e-koran</a>
        </li>
          <li class="nav-item">  
            <a href="#" class="hashtag-link">#kolom opini</a>
        </li>
          <li class="nav-item">  
            <a href="#" class="hashtag-link">#olahraga</a>
        </li>
    </ul>
</nav>

    @yield('konten')
</main>

<div class="footer-topline">
    <button id="scrollTopBtn" class="scroll-top-btn">
        ^
    </button>
</div>

<footer class="footer-opini mt-5">
    <div class="container py-5">
        <div class="row">
            <!-- KOLOM LOGO -->
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/opini.png') }}" alt="Opini.co" height="100">
                <p class="mt-3 footer-title">Connect With Us</p>

                <div class="d-flex gap-2">
                    <a href="#" class="social-icon fb">F</a>
                    <a href="#" class="social-icon ig">I</a>
                    <a href="#" class="social-icon pin">P</a>
                    <a href="#" class="social-icon tw">T</a>
                    <a href="#" class="social-icon yt">Y</a>
                </div>
            </div>

            <!-- KOLOM KATEGORI -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title mb-3">Kategori</h5>
                <ul class="list-unstyled footer-link fw-semibold">
                    <li><a href="#">Berita Lokal</a></li>
                    <li><a href="#">Berita Nasional</a></li>
                    <li><a href="#">E-Koran</a></li>
                    <li><a href="#">Kolom Opini</a></li>
                    <li><a href="#">Kuliner</a></li>
                    <li><a href="#">Olahraga</a></li>
                </ul>
            </div>

            <!-- KOLOM LAYANAN -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title mb-3">Layanan</h5>
                <ul class="list-unstyled footer-link fw-semibold">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Redaksi</a></li>
                    <li><a href="#">Kirim Artikel</a></li>
                    <li><a href="#">Pedoman Media Siber</a></li>
                    <li><a href="#">Kode Etik</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="footer-bottom text-center py-3 small">
        Copyright © {{ date('Y') }} Opini Mulut Bebas
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("scrollTopBtn");
    btn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});
</script>

</body>
</html>