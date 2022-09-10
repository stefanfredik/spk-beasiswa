<div class="table-responsive">
    <table class="table table-bordered" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>Bobot</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;

            foreach ($kriteria as $dt) :  ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['kriteria']; ?></td>
                    <td><?= $dt['bobot']; ?></td>
                    <td><?= $dt["keterangan"]; ?></td>
                    <td>
                        <a onclick="hapus(event,this)" class="btn btn-outline-danger" href="/<?= $url['parent']; ?>/delete/<?= $dt['id']; ?>"><i class="bi bi-trash mr-2"></i>Hapus</a>
                        <a onclick="edit(event,this)" class="btn  btn-outline-info" href="/<?= $url['parent']; ?>/get/<?= $dt['id']; ?>"><i class="bi bi-pencil-square mr-2"></i>Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>