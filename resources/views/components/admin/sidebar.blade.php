<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item active ">
        <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Master Data</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('admin.anggota') }}">Data Anggota</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('admin.penerbit') }}">Data Penerbit</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('admin.administrator') }}">Administrator</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('admin.peminjaman') }}">Data Peminjaman</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-collection-fill"></i>
            <span>Katalog Buku</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('admin.buku') }}">Data Buku</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('admin.kategori') }}">Kategori Buku</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('admin.index') }}" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Laporan Perpustakaan</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('admin.identitas') }}" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Identitas Aplikasi</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Berita</span>
        </a>
    </li>


    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-collection-fill"></i>
            <span>Pesan</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('admin.pesan_masuk') }}">Pesan masuk
                    <span class="badge bg-light-danger badge-pill badge-round float-right mt-50">
                        {{ count($pesan) }}
                    </span>
                </a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('admin.pesan_terkirim') }}">Pesan terkirim</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item {{ request()->is('logout*') ? 'active' : '' }} ">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
document.getElementById('logout-form').submit();" class="sidebar-link">
            <i class="bi bi-arrow-left-square-fill"></i>
            <span>Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>