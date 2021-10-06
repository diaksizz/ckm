<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#2C73D2;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
{{--        <div class="sidebar-brand-icon rotate-n-15">--}}
{{--            <i class="fab fa-firefox"></i>--}}
{{--        </div>--}}
        <div class="sidebar-brand-icon" >
            <img src="{{asset('images/LOGO himatika 2019.png')}}" style="width: 42px ;height: 40px">
        </div>
        <div class="sidebar-brand-text mx-3">HIMATIKA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelola Web
    </div>
    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Kelola Barang
    </div> -->
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fas fa-calendar"></i>
            <span>Agenda</span></a>
    </li>
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fa fa-tags"></i>
            <span>Artikel</span></a>
    </li>
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fa fa-tasks"></i>
            <span>Tes Tulis</span></a>
    </li>
    {{--    <li class="nav-item ">--}}
    {{--        <a class="nav-link" href="{{route('store_daftar')}}">--}}
    {{--            <i class="fa fa-boxes"></i>--}}
    {{--            <span>SPJ</span></a>--}}
    {{--    </li>--}}

    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
        </a>
        <div id="collapseTwo"
             class="collapse"
             aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">List Kategori User:</h6>
                <a class="collapse-item" href="{{route('admin-produk')}}">Mahasiswa</a>
                <a class="collapse-item" href="{{route('admin-produk')}}">Pendaftar</a>
                <a class="collapse-item" href="{{route('admin-produk')}}">Pengurus Aktif</a>
            </div>
        </div>
    </li>
    <!--
    <li class="nav-item ">
        <a class="nav-link" href="">
            <i class="fas fa-money-check-alt"></i>
            <span>Harga & Stok</span></a>
    </li> -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelola mobile
    </div>
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fa fa-user"></i>
            <span>Aspirasi</span></a>
    </li>
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fa fa-user"></i>
            <span>Cakahim</span></a>
    </li>
    <li class="nav-item {{ Route::is('admin-produk') ? 'active' : null  }}">
        <a class="nav-link" href="{{route('admin-produk')}}">
            <i class="fa fa-box"></i>
            <span>Pemilihan</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
<!-- Modal -->
{{--<style>--}}
{{--#button-interaction {--}}
{{--    width: max-content;--}}
{{--    height: max-content;--}}
{{--}--}}
{{--</style>--}}
