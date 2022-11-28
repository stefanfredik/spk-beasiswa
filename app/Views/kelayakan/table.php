<div class="table-responsive">
    <table class="table table-bordered" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($dataKelayakan as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nilai']; ?></td>
                    <td><?= $dt['keterangan']; ?></td>
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