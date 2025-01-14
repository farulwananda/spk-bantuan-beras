  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
              <img src="{{ asset('assets/img/logo/logologin.png') }}" width="50" height="50">
          </div>
          <div class="mx-1 sidebar-brand-text"style="text-align: left; ">Bantuan Pangan Beras</div>
      </a>
      <hr class="my-0 sidebar-divider">
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
          </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          Fitur
      </div>
      <li class="nav-item {{ request()->is('masyarakat*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('masyarakat.index') }}">
              <i class="fa-solid fa-users"></i>
              <span>Data Masyarakat</span>
          </a>
      </li>
      <li class="nav-item {{ request()->is('kriteria*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('kriteria.index') }}">
              <i class="fab fa-fw fa-wpforms"></i>
              <span>Kriteria</span>
          </a>
      </li>
      <li class="nav-item {{ request()->is('perangkingan*') || request()->is('normalisasi*') ? 'active' : '' }}">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
              aria-expanded="true" aria-controls="collapseBootstrap">
              <i class="fa-solid fa-sitemap"></i>
              <span>Proses</span>
          </a>
          <div id="collapseBootstrap"
              class="collapse {{ request()->is('perangkingan*') || request()->is('normalisasi*') || request()->is('rating-kecocokan*') || request()->is('hitung-vektor-s*') || request()->is('hitung-vektor-v') ? 'show' : '' }}"
              aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
              <div class="py-2 bg-white rounded collapse-inner">
                  <h6 class="collapse-header">Proses Perhitungan</h6>
                  <a class="collapse-item {{ request()->is('normalisasi*') ? 'active' : '' }}"
                      href="{{ route('normalisasi.index') }}">Normalisasi Bobot</a>
                  <a class="collapse-item {{ request()->is('rating-kecocokan*') ? 'active' : '' }}"
                      href="{{ route('rating.index') }}">Rating Kecocokan</a>
                  <a class="collapse-item {{ request()->is('hitung-vektor-s*') ? 'active' : '' }}"
                      href="{{ route('vektor-s.index') }}">Hitung Vektor S</a>
                  <a class="collapse-item {{ request()->is('hitung-vektor-v*') ? 'active' : '' }}"
                      href="{{ route('vektor-v.index') }}">Hitung Vektor V</a>
                  <a class="collapse-item {{ request()->is('perangkingan*') ? 'active' : '' }}"
                      href="{{ route('perangkingan.index') }}">Perangkingan</a>
              </div>
          </div>
      </li>
  </ul>
