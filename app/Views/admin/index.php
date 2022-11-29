<?= $this->extend("template/index"); ?>
<?= $this->section("content"); ?>
<!-- Content Row -->

<?php if (in_groups("Admin")) : ?>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body px-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahUser . " User" ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people-fill fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/user" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success text-white bg-success  shadow h-100 py-2">
                <div class="card-body px-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Data Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlahSiswa . " Siswa"; ?> </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-check-fill fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/siswa" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info bg-info text-white shadow h-100 py-2">
                <div class="card-body px-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Data Peserta</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlahPeserta . " Peserta"; ?> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/peserta" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-white border-left-warning shadow h-100 py-2">
                <div class="card-body px-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Data Laporan</div>
                            <div class="h5 mb-0 font-weight-bold text-white">Laporan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/laporan" class="btn btn-sm btn-secondary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<div class="">
    <div class="row text-center mb-4 p-3">
        <div class="display-6 text-white">Hallo <?= user()->nama_user ?> ! </div>
        <h3 class="display-5 text-white">Selamat Datang Di <?= WEB_TITLE ?></h3>
    </div>
</div>

<?= $this->endSection(); ?>