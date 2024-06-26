 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand logo-nav titleHome" href="/">Ngabar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Home</a>
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
              <div class="bungkus">
                <div class="sliderDark"></i></div>
              </div>
          @auth
          <center>
            <!-- Example single danger button -->
            <li class="nav-item dropdown loginAuth d-block">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i> 
              </a>
              <ul class="dropdown-menu text-center">
                <li><a class="dropdown-item" href="/dashboard/profil"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</a></li>
                <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-book"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </center>
          @else
            <li class="nav-item">
              <a class="nav-link login {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
            </li>
          @endauth
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="garis">
    <div class="bulat"></div>
    <hr>
  </div>
  <!-- Navbar End -->