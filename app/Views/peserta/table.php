<div class="table-responsive">
    <table id="<?= $url['parent']; ?>" class="table table-bordered" id="table" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <?php foreach ($dataKriteria as $dt) : ?>
                    <th class="align-middle"><?= $dt['keterangan'] ?></th>
                <?php endforeach; ?>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1;
            // dd($dataPeserta);
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nisn']; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <td><?= $dt['jenis_kelamin']; ?></td>
                    <td><?= $dt['kelas']; ?></td>

                    <?php foreach ($dataKriteria as $dk) :
                        $k = 'k_' . $dk['id'];

                        foreach ($dataSubkriteria as $sk) {
                            if ($dt[$k] == $sk['id']) {
                                echo '<td>' . $sk['subkriteria'] . '</td>';
                            }
                        }
                    endforeach; ?>

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