<?php

$allC1 = array();
$allC2 = array();
$allC3 = array();
$allC4 = array();

foreach ($dataPeserta as $dt) {
    array_push($allC1, bobotPenghasilan($dt['penghasilan']));
    array_push($allC2, bobotTanggungan($dt['tanggungan']));
    array_push($allC4, bobotNilai($dt['nilai']));
    array_push($allC3, bobotYatim($dt['yatimpiatu']));
}
?>

<div class="table-responsive align-middle">
    <table class="table border table-bordered table-striped table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Siswa</th>
                <th>Nisn</th>
                <th>Nilai</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $no = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <td><?= $dt['nisn'] ?></td>
                    <td>
                        <?php

                        $c1 = bobotPenghasilan($dt['penghasilan']);
                        $c2 = bobotTanggungan($dt['tanggungan']);
                        $c3 = bobotYatim($dt['yatimpiatu']);
                        $c4 = bobotNilai($dt['nilai']);
                        $jumKriteria = 18;

                        $bobotC1 = hitungBobot(5, $jumKriteria);
                        $bobotC2 = hitungBobot(5, $jumKriteria);
                        $bobotC3 = hitungBobot(4, $jumKriteria);
                        $bobotC4 = hitungBobot(4, $jumKriteria);

                        $norC1 = normalisasi($c1, $allC1);
                        $opC1 = optimasi($norC1, $bobotC1);

                        $norC2 = normalisasi($c2, $allC2);
                        $opC2 = optimasi($norC2, $bobotC2);

                        $norC3 = normalisasi($c3, $allC3);
                        $opC3 = optimasi($norC3, $bobotC3);

                        $norC4 = normalisasi($c4, $allC4);
                        $opC4 = optimasi($norC4, $bobotC4);

                        $nilaiAkhir = nilaiAkhir([$opC1, $opC2, $opC3, $opC4]);

                        // echo $nilaiAkhir;

                        ?>

                        <p>C1 : <?= $c1; ?> Nor C1 : <?= $norC1; ?> Op C1 : <?= $opC1; ?> Bobot : <?= $bobotC1; ?> Nilai Akhir : <?= $nilaiAkhir; ?></p>
                        <p>C2 : <?= $c2; ?> Nor C2 : <?= $norC2; ?> Op C2 : <?= $opC2; ?> Bobot : <?= $bobotC2; ?> Nilai Akhir : <?= $nilaiAkhir; ?></p>
                        <p>C3 : <?= $c3; ?> Nor C3 : <?= $norC3; ?> Op C3 : <?= $opC3; ?> Bobot : <?= $bobotC3; ?> Nilai Akhir : <?= $nilaiAkhir; ?></p>
                        <p>C4 : <?= $c4; ?> Nor C4 : <?= $norC4; ?> Op C4 : <?= $opC4; ?> Bobot : <?= $bobotC4; ?> Nilai Akhir : <?= $nilaiAkhir; ?></p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>