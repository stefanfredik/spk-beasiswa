<?= $this->extend("template/index"); ?>

<?= $this->section("content"); ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3> Tabel Normalisasi</h3>
            </div>
            <div id="data" class="card-body">
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>


<?= $this->section("script"); ?>

<script>
    let baseUrl = "<?= $url['parent']; ?>";

    $(document).ready(() => {
        getTable(baseUrl);
    });
</script>

<?= $this->endSection(); ?>