 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIKEPEGAWAIAN</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href={{route('dashboard')}}>
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Data Pegawai</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href={{route('pegawaiindex')}}>Pegawai</a>
            <a class="collapse-item" href={{route('jabatanindex')}}>Jabatan</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-folder"></i>
        <span>Absensi</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href={{route('absenindex')}}>Absensi Pegawai</a>
            <a class="collapse-item" href={{route('ijinindex')}}>Ijin</a>
        </div>
    </div>
</li>

<!-- Nav Item - Tunjangan -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTunjangan"
        aria-expanded="true" aria-controls="collapseTunjangan">
        <i class="fas fa-fw fa-money-bill"></i>
        <span>Data Gaji</span>
    </a>
    <div id="collapseTunjangan" class="collapse" aria-labelledby="headingTunjangan"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href={{route('gajiindex')}}>Gaji</a>
            <a class="collapse-item" href={{route('tunjanganindex')}}>Tunjangan</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>


<!-- Nav Item - Laporan -->
<li class="nav-item">
    <a class="nav-link colapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true"
        aria-controls="collapseLaporan">
        <i class="fas fa-fw fa-file-export"></i>
        <span>Laporan</span>
    </a>
    <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Data Pegawai</a>
            <a class="collapse-item" href="login.html">Data Absensi</a>
            <a class="collapse-item" href="login.html">Data Tunjangan</a>
        </div>
    </div>
</li>




<!-- Nav Item - Pengguna -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-user"></i>
        <span>Data Pengguna</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->