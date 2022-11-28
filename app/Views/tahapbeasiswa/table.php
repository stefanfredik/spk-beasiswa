<div class="table-responsive align-middle">
    <table class="table border table-bordered table-striped table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Tahap</th>
                <th>Jumlah Peserta</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($tahap as $dt) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['tahap']; ?></td>
                    <td><?= $dt['jumlah']; ?></td>
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