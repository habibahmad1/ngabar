<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngabar | Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand logo-nav" href="#">Ngabar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quran">Al-Qur'an</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Tentang Kami</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="garis">
        <div class="bulat"></div>
        <hr>
      </div>
      <!-- Navbar End -->

      <div class="container mt-4">
        @yield('content')
      </div>



    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 