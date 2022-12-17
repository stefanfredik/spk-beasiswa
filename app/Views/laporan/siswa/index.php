<?= $this->extend('template/index'); ?>
<?= $this->section("content"); ?>

<a target="__blank" href="/laporan/cetakLaporanSiswa" href="" class="btn btn-primary my-2"><i class="bi bi-printer mr-2"></i>Cetak Laporan</a>
<div class="row">
    <div class="col">
        <div class="card  shadow">
            <div class="card-header">
                <h3><?= $title; ?></h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table border" width="100%" colspacing="0">
                        <thead>
                            <tr class="align-middle">
                                <th>No</th>
                                <th>NISN</td>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</td>
                                <th>Kelas</td>
                                <th>Alamat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $rank = 1;
                            foreach ($dataSiswa as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ps['nisn'] ?></td>
                                    <td><?= $ps['nama_siswa'] ?></td>
                                    <td><?= $ps['jenis_kelamin'] ?></td>
                                    <td><?= $ps['kelas'] ?></td>
                                    <td><?= $ps['alamat'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section("script"); ?>
<script>
    const config = {
        columnDefs: [{
            width: 20,
            targets: 0
        }],
        language: {
            paginate: {
                first: "Awal",
                last: "Akhir",
                next: ' <i class="bi bi-arrow-right-circle"></i>',
                previous: '<i class="bi bi-arrow-left-circle"></i>'
            },
            zeroRecords: "Belum ada data.",
            search: "Cari:",
            lengthMenu: "Tampil _MENU_ kolom",
            info: "Kolom _START_ sampai _END_ dari _TOTAL_ kolom"
        }
    };

    $('#table').DataTable(config)
</script>
<?= $this->endSection(); ?>