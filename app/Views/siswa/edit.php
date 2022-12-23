<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Edit <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEdit" onsubmit="simpanData(event,<?= $siswa['id']; ?>)">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nisn</label>
                        <input name="nisn" type="text" class="form-control" required value="<?= $siswa["nisn"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama_siswa" type="text" class="form-control" required value="<?= $siswa["nama_siswa"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option <?= $siswa["jenis_kelamin"] == "laki-laki" ? "selected" : "" ?> value="laki-laki">Laki-Laki</option>
                            <option <?= $siswa["jenis_kelamin"] == "perempuan" ? "selected" : "" ?> value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" id="">
                            <option value="">Pilih Kelas</option>
                            <option <?= $siswa['kelas'] == 'X' ? 'selected' : ''; ?> value="X">X</option>
                            <option <?= $siswa['kelas'] == 'XI' ? 'selected' : ''; ?> value="XI">XI</option>
                            <option <?= $siswa['kelas'] == 'XII' ? 'selected' : ''; ?> value="XII">XII</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" required value="<?= $siswa["alamat"]; ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>