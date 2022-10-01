<div class="table-responsive align-middle">
    <table class="table border table-bordered table-striped table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Siswa</th>
                <?php
                foreach ($kriteria as $dt) : ?>
                    <th><?= $dt['keterangan'] ?></th>
                <?php endforeach; ?>
                <th>Total Bobot</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // helper('bobot');
            $no = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <td><?= $p = bobotPenghasilan($dt['penghasilan']); ?></td>
                    <td><?= $n = bobotNilai($dt['nilai']); ?></td>
                    <td><?= $t = bobotTanggungan($dt['tanggungan']); ?></td>
                    <td><?= $y = bobotYatim($dt['yatimpiatu']); ?></td>
                    <td><?= ($p + $n + $t + $y) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>