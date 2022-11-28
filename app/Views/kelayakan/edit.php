<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="" method="" id="formEdit" onsubmit="simpanData(event,<?= $kelayakan['id']; ?>)">
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">Nilai</label>
                        <input name="nilai" type="text" class="form-control" value="<?= $kelayakan['nilai']; ?>" required>
                    </div>


                    <div class=" mb-2">
                        <label class="form-label">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control" value="<?= $kelayakan['keterangan']; ?>" required>
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