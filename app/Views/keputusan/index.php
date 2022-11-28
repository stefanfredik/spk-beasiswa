<?= $this->extend('/template/index'); ?>
<?= $this->section("content"); ?>

<div class="row mb-2">
    <div class="col-lg-12">
        <div class="card border shadow">
            <div class="card-header">
                <h3>Kriteria Kelayakan</h3>
            </div>
            <div class="card-body">
                <?php foreach ($kelayakan as $kl) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li><span class="fw-bold mx-2"><?= $kl['nilai']; ?></span><?= $kl['keterangan']; ?></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card  shadow">
            <div class="card-header">
                <h3>Daftar Peserta</h3>
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
                                <th>Alamat</td>
                                <th>Nilai Akhir</td>
                                <th>Status Layak</th>
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
                                    <td><?= $ps['alamat'] ?></td>
                                    <td><?= $ps['kriteria_nilai']; ?></td>
                                    <th><?= @$ps['status_layak']; ?></th>
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