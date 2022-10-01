<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="bi bi-ui-checks"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= WEB_NAME; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fas fa-home"></i>
            <span>Halaman Utama</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item <?= @$url['parent'] == 'user' ? 'active' : ''; ?>">
        <a class=" nav-link" href="/user">
            <i class="bi bi-people-fill"></i>
            <span>Data User</span></a>
    </li>

    <li class="nav-item <?= @$url['parent'] == 'siswa' ? 'active' : ''; ?>">
        <a class="nav-link" href="/siswa">
            <i class="bi bi-people"></i>
            <span>Data Siswa</span></a>
    </li>

    <li class="nav-item <?= @$url['parent'] == 'kriteria' ? 'active' : ''; ?>">
        <a class="nav-link" href="/kriteria">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Kriteria</span></a>
    </li>


    <hr class="sidebar-divider">

    <li class="nav-item <?= @$url['parent'] == 'peserta' ? 'active' : ''; ?>">
        <a class="nav-link" href="/peserta">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Peserta</span></a>
    </li>

    <li class="nav-item <?= $url['parent'] == 'nilai' ? 'active' : ''; ?>">
        <a class="nav-link" href="/nilai">
            <i class="bi bi-card-checklist"></i>
            <span>Pilihan Nilai</span></a>
    </li>

    <li class="nav-item <?= @$url['parent'] == 'keputusan' ? 'active' : ''; ?>">
        <a class="nav-link " href="/keputusan">
            <i class="bi bi-shield-check"></i>
            <span>Data Keputusan</span></a>
    </li>

    <li class="nav-item <?= @$url['parent'] == 'laporan' ? 'active' : ''; ?>">
        <a class="nav-link " href="/laporan">
            <i class="bi bi-table"></i>
            <span>Data Laporan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- <div class="sidebar-heading">
        Addons
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>