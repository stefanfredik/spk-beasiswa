<?= $this->extend("template/index"); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3> Tabel Normalisasi</h3>
            </div>
            <div class="card-body">
                <?= $this->include("/moora/normalisasi"); ?>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3> Tabel Optimasi</h3>
            </div>
            <div class="card-body">
                <?= $this->include("/moora/optimasi"); ?>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3> Tabel Nilai </h3>
            </div>
            <div class="card-body">
                <?= $this->include("/moora/nilai"); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


<?= $this->section("script"); ?>

<script>
    let baseUrl = "<?= $url['parent']; ?>";
    const setup = {
        columnDefs: [{
            width: 20,
            targets: 0
        }],
        "language": {
            "paginate": {
                "first": "Awal",
                "last": "Akhir",
                "next": '<i class="bi bi-arrow-right-circle"></i>',
                "previous": '<i class="bi bi-arrow-left-circle"></i>'
            },
            "zeroRecords": "Data tidak ditemukan.",
            "search": "Cari:",
            "lengthMenu": "Tampil _MENU_ kolom",
            "info": "Kolom _START_ sampai _END_ dari _TOTAL_ kolom",
        }
    };
    $(document).ready(() => {
        $(`#normalisasi`).DataTable(setup);
        $(`#optimasi`).DataTable(setup);
        $(`#nilai`).DataTable(setup);
    });
</script>

<?= $this->endSection(); ?>