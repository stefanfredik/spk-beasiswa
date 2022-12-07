<div class="table-responsive">
    <table class="table table-bordered" id="siswa" width="100%" colspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;

            foreach ($dataSiswa as $dt) :  ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nisn']; ?></td>
                    <td><?= ucwords($dt['nama_siswa']); ?></td>
                    <td><?= ucwords($dt["jenis_kelamin"]); ?></td>
                    <td><?= ucwords($dt['kelas']); ?></td>
                    <td><?= ucwords($dt['alamat']); ?></td>
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