<?= $this->extend('template/cetak/index'); ?>
<?= $this->section("table"); ?>

<table id="table" class="table border" width="100%" colspacing="0">
    <thead>
        <tr class="align-middle">
            <th style="padding: 5px;">No</th>
            <th style="padding: 5px;" class="text-center">Rangking</th>
            <th style="padding: 5px;">NISN</td>
            <th style="padding: 5px;">Nama Siswa</th>
            <th style="padding: 5px;">Jenis Kelamin</td>
            <th style="padding: 5px;">Kelas</td>
            <th style="padding: 5px;">Alamat</td>
            <th style="padding: 5px;">Nilai Akhir</td>
            <th style="padding: 5px;">Tahap</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $rank = 1;
        foreach ($peserta as $ps) :
        ?>
            <tr>
                <td width="10px" style="text-align: center;"><?= $no++; ?></td>
                <td style="text-align: center;">
                    <?= $rank++; ?>
                </td>
                <td><?= $ps['nisn'] ?></td>
                <td><?= $ps['nama_siswa'] ?></td>
                <td><?= $ps['jenis_kelamin'] ?></td>
                <td><?= $ps['kelas'] ?></td>
                <td><?= $ps['alamat'] ?></td>
                <td><?= $ps['kriteria_nilai']; ?></td>
                <td>
                    <?php
                    $total = 1;
                    $jumlahTahap = 0;

                    foreach ($tahap as $th) {
                        $jumlahTahap += $th['jumlah'];
                    }

                    if ($rank <= $jumlahTahap) {
                        foreach ($tahap as $th) {
                            $total += $th['jumlah'];

                            if ($rank <= $total) {
                                echo $th['tahap'];
                                break;
                            }
                        }
                    } else {
                        echo "Drop Out";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
<?= $this->endSection(); ?>