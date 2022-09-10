<?= $this->extend("template/index"); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <!-- <button type="button" class="m-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="m-2 bi bi-plus-square"></i>Tambah Data
        </button> -->

        <button data-url="/user/tambah" class="m-2 btn btn-primary" onclick="tambah(this)"><i class="m-2 bi bi-plus-square"></i>Tambah Data</button>

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
    const formInput = ["username", "password", "password2"];

    $(document).ready(() => {
        getTable(baseUrl);
    });

    function validation(error) {
        resetForm(formInput);
        if (error.username) {
            $("input[name='username']").addClass("is-invalid").next().html(error.username);
        }

        if (error.password) {
            $("input[name='password']").addClass("is-invalid").next().html(error.password);
        }

        if (error.password2) {
            $("input[name='password2']").addClass("is-invalid").next().html(error.password2);
        }
    }


    function resetForm(arr) {
        arr.forEach((a) => {
            $(`input[name='${a}']`).removeClass("is-invalid").next().html("");
        });
    }
</script>






<?= $this->endSection(); ?>