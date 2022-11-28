<?= $this->extend("template/index"); ?>

<?= $this->section("content"); ?>
<a target="__blank" href="/laporan/cetak" href="" class="btn btn-primary my-2"><i class="bi bi-printer mr-2"></i>Cetak Laporan</a>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3>Data <?= $title; ?></h3>
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