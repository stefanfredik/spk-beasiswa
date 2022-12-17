<?= $this->extend('template/cetak/index'); ?>
<?= $this->section("table"); ?>

<table id="table" class="table border" width="100%" colspacing="0">
    <thead>
        <tr class="align-middle">
            <th>No</th>
            <th>NISN</td>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</td>
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
                <td><?= $ps['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>