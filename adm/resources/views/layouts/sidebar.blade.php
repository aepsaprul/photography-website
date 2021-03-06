<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">NOTOMOTO</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a> 
        
        <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('/home') }}" class="nav-link {{ set_active(['home', 'home/*']) }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/kategori') }}" class="nav-link {{ set_active(['kategori', 'kategori/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/galeri') }}" class="nav-link {{ set_active(['galeri', 'galeri/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Galeri
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/reservasi') }}" class="nav-link {{ set_active(['reservasi', 'reservasi/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Reservasi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/kontak') }}" class="nav-link {{ set_active(['kontak', 'kontak/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Kontak
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/fotografer') }}" class="nav-link {{ set_active(['fotografer', 'fotografer/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Fotografer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/tentang') }}" class="nav-link {{ set_active(['tentang', 'tentang/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Tentang
            </p>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ url('/slider') }}" class="nav-link {{ set_active(['slider', 'slider/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Slider
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/background') }}" class="nav-link {{ set_active(['background', 'background/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Background
            </p>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>