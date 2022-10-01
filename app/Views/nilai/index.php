<?= $this->extend("template/index"); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <!-- <button type="button" class="m-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="m-2 bi bi-plus-square"></i>Tambah Data
        </button> -->

        <!-- <button data-url="/peserta/tambah" class="m-2 btn btn-primary" onclick="tambah(this)"><i class="m-2 bi bi-plus-square"></i>Tambah Data</button> -->

        <div class="card">
            <div class="card-header">
                <h3><?= $title; ?></h3>
            </div>
            <div id="data" class="card-body">
            </div>
        </div>
    </div>
</div>

<div id="modalArea">
</div>

<?= $this->endSection(); ?>


<?= $this->section("script"); ?>

<script>
    let baseUrl = "<?= $url['parent']; ?>";
    $(document).ready(() => {
        getTable(baseUrl);
    });

    function validation(error) {
        if (error.nisn) {
            $("select[name='nisn']").addClass("is-invalid").next().html(error.nisn);
        }
    }
</script>






<?= $this->endSection(); ?>