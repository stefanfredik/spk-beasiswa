<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formTambah" onsubmit="simpanData(event)">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kriteria</label>
                        <select class="form-control" name="kriteria" id="" required>
                            <option value="">Pilih Kriteria</option>
                            <option value="Penghasilan Orang Tua">Pengahasilan Orang Tua</option>
                            <option value="Jumlah Tanggungan">Jumlah Tanggungan</option>
                            <option value="Yatim Piatu">Yatim Piatu</option>
                            <option value="Nilai Raport">Nilai Raport</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <select class="form-control" name="keterangan" id="" required>
                            <option value="">Keterangan</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                            <option value="C3">C3</option>
                            <option value="C4">C4</option>
                            <option value="C5">C5</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bobot</label>
                        <input name="bobot" type="number" class="form-control" required>
                        <div id="" class="invalid-feedback"></div>
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