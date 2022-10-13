<div class="table-responsive">
    <table class="table table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="align-middle table-light">
            <tr class="text-center">
                <th class="align-middle" rowspan="2">No</th>
                <th class="align-middle" rowspan="2">Siswa</th>
                <th class="align-middle" rowspan="2">NISN</th>
                <?php foreach ($kriteria as $dt) : ?>
                    <th class="align-middle" colspan="2"><?= $dt['kriteria'] ?></th>
                <?php endforeach; ?>

                <th class="align-middle" rowspan="2">Opsi</th>
            </tr>
            <tr>
                <th>Jumlah</th>
                <th>B</th>
                <th>Jumlah</th>
                <th>B</th>
                <th>Status</th>
                <th>B</th>
                <th>Nilai</th>
                <th>B</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // helper('bobot');
            $no = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td class="font-bold"><?= $dt['nama_siswa']; ?></td>
                    <td class="text-bold"><?= $dt['nisn']; ?></td>
                    <td><?= rupiah($dt['penghasilan']); ?></td>
                    <td width="10px" class="text-primary "><?= bobotPenghasilan($dt['penghasilan']); ?></td>
                    <td><?= $dt['tanggungan']; ?></td>
                    <td width="10px" class="text-primary "><?= bobotTanggungan($dt['tanggungan']); ?></td>
                    <td><?= $dt['yatimpiatu']; ?></td>
                    <td width="10px" class="text-primary "><?= bobotYatim($dt['yatimpiatu']); ?></td>
                    <td><?= $dt['nilai']; ?></td>
                    <td width="5px" class="text-primary "><?= bobotNilai($dt['nilai']); ?></td>
                    <td style="text-align: center" width="120px">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a onclick="hapus(event,this)" class="btn btn-danger" href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash mr-2"></i></a>
                            <a onclick="edit(event,this)" class="btn  btn-primary" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square mr-2"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>