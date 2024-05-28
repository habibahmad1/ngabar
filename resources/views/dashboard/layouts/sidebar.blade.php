<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-dark" style="height: 100vh; background: #caf0f8" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fs-3" id="sidebarMenuLabel" style="color: white">Ngabar</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-white">
            <span>My Dashboard</span>
          </h6>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard') ? 'activeSidebar' : '' }}" aria-current="page" href="/dashboard">
              <i class="fa-solid fa-book iconColor"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/artikel*') ? 'activeSidebar' : '' }}" href="/dashboard/artikel">
              <i class="fa-regular fa-file-lines iconColor"></i>
              My Artikel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/galeri') ? 'activeSidebar' : '' }}" href="/dashboard/galeri">
              <i class="fa-regular fa-file-image iconColor"></i> 
              My Galery
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('/') ? 'activeSidebar' : '' }}" href="/" target="_blank">
              <i class="fa-solid fa-house" style="font-size: 18px; color:white"></i> 
              Beranda
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-white">
            <span>Features</span>
          </h6>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/member') ? 'activeSidebar' : '' }}" href="/dashboard/member">
              <i class="fa-solid fa-users" style="font-size: 18px; color:white"></i> 
              Member Online
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/profil') ? 'activeSidebar' : '' }}" href="/dashboard/profil">
                <i class="fa-solid fa-user iconColor"></i>
              My Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/reedem') ? 'activeSidebar' : '' }}" href="/dashboard/reedem">
              <i class="fa-solid fa-gift iconColor"></i>
              Reedem Code
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/setting') ? 'activeSidebar' : '' }}" href="/dashboard/setting">
              <i class="fa-solid fa-gear iconColor"></i>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link d-flex align-items-center gap-2 iconColor"><i class="fa-solid fa-arrow-right-from-bracket iconColor"></i> Logout</button>
            </form>
          </li>
        </ul>

        @can('admin-superadmin')
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
            <span>Administrator</span>
          </h6>

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/categories') ? 'activeSidebar' : '' }}" href="/dashboard/categories">
                <i class="fa-solid fa-border-none iconColor"></i>
                Create Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/data') ? 'activeSidebar' : '' }}" href="/dashboard/data">
                <i class="fa-solid fa-folder iconColor"></i> 
                Data User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 iconColor {{ Request::is('dashboard/lapor') ? 'activeSidebar' : '' }}" href="/dashboard/lapor">
                <i class="fa-solid fa-flag iconColor"></i> 
                Laporan 
              </a>
            </li>
          </ul>
        @endcan

      </div>
    </div>
  </div>