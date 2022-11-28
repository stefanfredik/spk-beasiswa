<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formTambah" onsubmit="simpanData(event,<?= $subkriteria['id']; ?>)">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kriteria</label>
                        <select class="form-control" name="id_kriteria" id="" required>
                            <option value="">Pilih Kriteria</option>
                            <?php foreach ($dataKriteria as $dk) : ?>
                                <option <?= $subkriteria['id_kriteria'] == $dk['id'] ? 'selected' : ''; ?> value="<?= $dk['id']  ?>"><?= $dk['kriteria'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Subkriteria</label>
                        <input name="subkriteria" type="text" class="form-control" required value="<?= $subkriteria['subkriteria']; ?>">
                        <div id="" class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nilai</label>
                        <input name="nilai" type="number" class="form-control" required value="<?= $subkriteria['nilai']; ?>">
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