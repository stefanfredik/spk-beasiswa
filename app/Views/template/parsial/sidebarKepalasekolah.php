<ul class="navbar-nav bg-white sidebar text-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <!-- <i class="bi bi-ui-checks"></i> -->
            <img width="35rem" class="img fluid" src="/assets/img/logo.png" alt="">
        </div>
        <div class="sidebar-brand-text text-primary mx-3"><?= WEB_NAME; ?></div>
    </a>

    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= url_is("/") || url_is("/home") ? 'active' : ''; ?>">
        <a class="nav-link" href="/home">
            <i class="fas fa-home"></i>
            <span>Halaman Utama</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item <?= @$url['parent'] == 'laporan' ? 'active' : ''; ?>">
        <a class="nav-link " href="/laporan">
            <i class="bi bi-table"></i>
            <span>Data Laporan</span></a>
    </li>

    <hr>
    <li class="nav-item">
        <a class="nav-link " href="/logout">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span></a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>