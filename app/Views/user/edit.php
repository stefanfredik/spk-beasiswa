<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formTambah" onsubmit="simpanData(event,<?= $user['id']; ?>)">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama User</label>
                        <input name="nama_user" type="text" class="form-control" required value="<?= $user['nama_user']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <select class="form-control" name="jabatan" id="" required>
                            <option value="">Pilih Jabatan</option>
                            <option <?= $user['jabatan'] === 'Admin' ? 'selected' : ''; ?> value="Admin">Admin</option>
                            <option <?= $user['jabatan'] === 'Kepala Sekolah' ? 'selected' : ''; ?> value="Kepala Sekolah">Kepala Sekolah</option>
                        </select>
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