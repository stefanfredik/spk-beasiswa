<div class="table-responsive">
    <table class="table table-bordered" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Sub Kriteria</th>
                <th>Nilai</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($subkriteria as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['kriteria']; ?></td>
                    <td><?= $dt['subkriteria']; ?></td>
                    <td style="text-align: center" width="120px"><?= $dt['nilai']; ?></td>
                    <td style="text-align: center" width="120px">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a onclick="hapus(event,this)" class="btn btn-danger" href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash mr-2"></i></a>
                            <a onclick="edit(event,this)" class="btn  btn-info" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square mr-2"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>