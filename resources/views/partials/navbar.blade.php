 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand logo-nav" href="/">Ngabar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Al-Qur'an") ? 'active' : '' }}" href="/quran">Al-Qur'an</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang Kami") ? 'active' : '' }}" href="/about">Tentang Kami</a>
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