<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" id="formEdit" onsubmit="simpanData(event,<?= $peserta['id']; ?>)">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Siswa</label>
                        </div>
                        <div class="col-md-8">
                            <input disabled class="form-control" type="text" name="id_siswa" id="" value="<?= $peserta['nama_siswa']; ?>">
                        </div>
                    </div>

                    <?php foreach ($dataKriteria as $dt) : ?>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label class="form-label"><?= $dt['keterangan'] . ' - ' . $dt['kriteria']; ?></label>
                            </div>

                            <div class="col-md-8">
                                <select class="form-control" name="<?= 'k_' . $dt['id'] ?>" id="" required>
                                    <option value="">Pilih Subkriteria</option>
                                    <?php
                                    $k = 'k_' . $dt['id'];
                                    foreach ($dataSubkriteria as $sk) :
                                        if ($dt['id'] == $sk['id_kriteria']) :
                                    ?>
                                            <option <?= ($peserta[$k] == $sk['id']) ? 'selected' : '' ?> value="<?= $sk['id']; ?>"><?= $sk['subkriteria']; ?></option>
                                    <?php endif;
                                    endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>