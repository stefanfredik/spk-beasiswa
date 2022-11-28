<?= $this->extend('/template/index'); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <button data-url="/kelayakan/tambah" class="m-2 btn btn-primary" onclick="tambah(this)"><i class="m-2 bi bi-plus-square"></i>Tambah Data</button>

        <div class="card border border-secondary">
            <div class="card-header">
                <h3><?= $title; ?></h3>
            </div>
            <div id="data" class="card-body"></div>
        </div>

    </div>
</div>

<div id="modalArea">
</div>


<?= $this->section('script'); ?>
<script>
    let baseUrl = "<?= $url['parent']; ?>";
    $(document).ready(() => {
        getTable(baseUrl);
    });
</script>
<?= $this->endSection(); ?>


<?= $this->endSection(); ?>