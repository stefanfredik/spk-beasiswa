<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formTambah" onsubmit="simpanData(event)">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Siswa</label>
                        <select class="form-control" name="nisn" id="" required>
                            <option value="">Pilih Siswa</option>
                            <?php foreach ($siswa as $dt) : ?>
                                <option value="<?= $dt['nisn']; ?>"><?= $dt['nama_siswa']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="" class="invalid-feedback"></div>
                    </div>

                    <hr>
                    <div class="mb-3">
                        <label class="form-label">Penghasilan</label>
                        <input name="penghasilan" type="text" class="form-control" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Nilai Raport</label>
                        <input name="nilai" type="number" class="form-control" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggungan</label>
                        <select class="form-control" name="tanggungan" id="" required>
                            <option value="">Pilih Tanggungan</option>
                            <option value="5">5 Atau Lebih</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Yatim Piatu</label>
                        <select class="form-control" name="yatimpiatu" id="" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Yatim Piatu">Yatim Piatu</option>
                            <option value="Yatim">Yatim</option>
                            <option value="Piatu">Piatu</option>
                            <option value="Piatu">Lengkap</option>
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