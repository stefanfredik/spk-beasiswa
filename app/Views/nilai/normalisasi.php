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
    <table class="table border table-bordered table-striped table-hover" id="normalisasi" width="100%" colspacing="0">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Siswa</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $no = 1;
            foreach ($dataPeserta as $dt) :
                $nilaiC1 = bobotPenghasilan($dt['penghasilan']);
                $nilaiC2 = bobotTanggungan($dt['tanggungan']);
                $nilaiC3 = bobotYatim($dt['yatimpiatu']);
                $nilaiC4 = bobotNilai($dt['nilai']);

                $jumKriteria = 18;

                $bobotC1 = hitungBobot(5, $jumKriteria);
                $bobotC2 = hitungBobot(5, $jumKriteria);
                $bobotC3 = hitungBobot(4, $jumKriteria);
                $bobotC4 = hitungBobot(4, $jumKriteria);

                $norC1 = normalisasi($nilaiC1, $allC1);
                $opC1 = optimasi($norC1, $bobotC1);

                $norC2 = normalisasi($nilaiC2, $allC2);
                $opC2 = optimasi($norC2, $bobotC2);

                $norC3 = normalisasi($nilaiC3, $allC3);
                $opC3 = optimasi($norC3, $bobotC3);

                $norC4 = normalisasi($nilaiC4, $allC4);
                $opC4 = optimasi($norC4, $bobotC4);
            ?>


                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt['nama_siswa']; ?></td>
                    <th><?= $norC1 ?></th>
                    <th><?= $norC2 ?></th>
                    <th><?= $norC3 ?></th>
                    <th><?= $norC4 ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>