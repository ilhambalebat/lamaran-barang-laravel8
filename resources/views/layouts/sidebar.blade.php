<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{  asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= asset('assets/dist/img/avatar5.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? "active" : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">Manajemen Master Barang</li>
                
                @if(Auth::user()->role == "isAdmin")
                <li class="nav-item">
                    <a href="/lokasi" class="nav-link {{ request()->is('lokasi') ? "active" : "" }}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Lokasi</p>
                    </a>
                </li>             
                <li class="nav-item">
                    <a href="/departemen" class="nav-link {{ request()->is('departemen') ? "active" : "" }}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Departemen</p>
                    </a>
                </li>             
                <li class="nav-item">
                    <a href="/barang" class="nav-link {{ request()->is('barang') ? "active" : "" }}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Barang</p>
                    </a>
                </li>             
                <li class="nav-item">
                    <a href="/peminta" class="nav-link {{ request()->is('peminta') ? "active" : "" }}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Peminta</p>
                    </a>
                </li>       
                @endif
                      
                <li class="nav-item">
                    <a href="/permintaan" class="nav-link {{ request()->is('permintaan') ? "active" : "" }}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Permintaan</p>
                    </a>
                </li>             
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
