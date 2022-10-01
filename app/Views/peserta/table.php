<div class="table-responsive align-middle">
    <table class="table border  table-striped table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class=" table-light">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Siswa</th>
                <?php foreach ($kriteria as $dt) : ?>
                    <th><?= $dt['keterangan'] ?></th>
                <?php endforeach; ?>

                <th rowspan="2">Opsi</th>
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
                    <td><?= rupiah($dt['penghasilan']); ?></td>
                    <td><?= $dt['nilai']; ?></td>
                    <td><?= $dt['tanggungan']; ?></td>
                    <td><?= $dt['yatimpiatu']; ?></td>
                    <td class="d-flex flex-row">

                        <a onclick="edit(event,this)" class="btn  btn-outline-info mr-2" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="hapus(event,this)" class="btn btn-outline-danger " href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>