<div class="table-responsive align-middle">
    <table class="table table-bordered table-striped table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="text-center table-light">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Siswa</th>
                <th colspan="2">Penghasilan</th>
                <th colspan="2">Nilai Raport</th>
                <th colspan="2">Tanggungan</th>
                <th colspan="2">Yatim Piatu</th>
                <th rowspan="2">Total Bobot</th>
                <th rowspan="2">Opsi</th>
            </tr>
            <tr>
                <th>Jumlah</th>
                <th>Bobot</th>
                <th>Nilai</th>
                <th>Bobot</th>
                <th>Jumlah</th>
                <th>Bobot</th>
                <th>Status</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <td><?= rupiah($dt['penghasilan']); ?></td>
                    <td class="font-weight-bold"><?= $p = bobotPenghasilan($dt['penghasilan'], 18); ?></td>
                    <td><?= $dt['nilai']; ?></td>
                    <td class="font-weight-bold"><?= $n = bobotNilai($dt['nilai']); ?></td>
                    <td><?= $dt['tanggungan']; ?></td>
                    <td class="font-weight-bold"><?= $t = bobotTanggungan($dt['tanggungan']); ?></td>
                    <td><?= $dt['yatimpiatu']; ?></td>
                    <td class="font-weight-bold"> <?= $y = bobotYatim($dt['yatimpiatu']); ?></td>
                    <td class="font-weight-bold"><?= totalBobot($p, $t, $n, $y); ?></td>
                    <td class="d-flex flex-row">

                        <a onclick="edit(event,this)" class="btn  btn-outline-info mr-2" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="hapus(event,this)" class="btn btn-outline-danger " href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>