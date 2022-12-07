<?= $this->extend('/template/index'); ?>
<?= $this->section("content"); ?>

<div class="row">
    <div class="col">
        <div class="card  shadow">
            <div class="card-header">
                <h3>Data Peserta</h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table border" width="100%" colspacing="0">
                        <thead>
                            <tr class="align-middle">
                                <th>No</th>
                                <th class="text-center">Rangking</th>
                                <th>NISN</td>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</td>
                                <th>Kelas</td>
                                <th>Alamat</td>
                                <th>Nilai Akhir</td>
                                    <!-- <th>Status Layak</th> -->
                                <th>Tahap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $rank = 1;
                            foreach ($peserta as $ps) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td class="text-center"><?= $rank++; ?></td>
                                    <td><?= $ps['nisn'] ?></td>
                                    <td><?= $ps['nama_siswa'] ?></td>
                                    <td><?= $ps['jenis_kelamin'] ?></td>
                                    <td><?= $ps['kelas'] ?></td>
                                    <td><?= $ps['alamat'] ?></td>
                                    <td><?= $ps['kriteria_nilai']; ?></td>
                                    <td>
                                        <?php
                                        $total = 1;

                                        foreach ($tahap as $th) :
                                            $total += $th['jumlah'];

                                            if ($rank <= $total) {
                                                echo $th['tahap'];
                                                break;
                                            }

                                        ?>

                                        <?php endforeach; ?>
                                    </td>
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