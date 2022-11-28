<?= $this->extend('/template/index'); ?>
<?= $this->section("content"); ?>
<div class="mx-2 row text-white">
    <div class="col">
        <h3>Silahkan Lengkapi Data Berikut Agar Bisa Mengakses Halaman Ini.</h3>
        <ul>
            <?php foreach ($listError  as $err) : ?>
                <li><?= $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?= $this->endSection(); ?>