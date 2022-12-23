<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formTambah" onsubmit="simpanData(event)">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nisn</label>
                        <input name="nisn" type="text" maxlength="10" minlength="10" class="form-control" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama_siswa" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" id="">
                            <option value="">Pilih Kelas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
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