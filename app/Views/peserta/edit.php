<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formEdit" onsubmit="simpanData(event,<?= $peserta['id']; ?>)">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Siswa</label>
                        <input disabled name="" type="text" class="form-control" value="<?= $peserta['nama_siswa']; ?>" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">Penghasilan</label>
                        <input name="penghasilan" type="text" class="form-control" value="<?= $peserta['penghasilan']; ?>" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Nilai</label>
                        <input name="nilai" type="number" class="form-control" value="<?= $peserta['nilai']; ?>" required>
                        <div id="" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggungan</label>
                        <select class="form-control" name="tanggungan" id="" required>
                            <option <?= ($peserta['tanggungan'] == 5) ? 'selected' : ''; ?> value="5">5 Atau Lebih</option>
                            <option <?= ($peserta['tanggungan'] == 4) ? 'selected' : ''; ?> value="4">4</option>
                            <option <?= ($peserta['tanggungan'] == 3) ? 'selected' : ''; ?> value="3">3</option>
                            <option <?= ($peserta['tanggungan'] == 2) ? 'selected' : ''; ?> value="2">2</option>
                            <option <?= ($peserta['tanggungan'] == 1) ? 'selected' : ''; ?> value="1">1</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Yatim Piatu</label>
                        <select class="form-control" name="yatimpiatu" id="" required>
                            <option <?= ($peserta['yatimpiatu'] == "Yatim Piatu") ? 'selected' : ''; ?> value="Yatim Piatu">Yatim Piatu</option>
                            <option <?= ($peserta['yatimpiatu'] == "Yatim") ? 'selected' : ''; ?> value="Yatim">Yatim</option>
                            <option <?= ($peserta['yatimpiatu'] == "Piatu") ? 'selected' : ''; ?> value="Piatu">Piatu</option>
                            <option <?= ($peserta['yatimpiatu'] == "Lengkap") ? 'selected' : ''; ?> value="Lengkap">Lengkap</option>
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