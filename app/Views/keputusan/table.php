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
    <table class="table table-bordered table-hover" id="<?= $url['parent']; ?>" width="100%" colspacing="0">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th width="100px">Rangking</th>
                <th>Nama Siswa</th>
                <th>Nilai</th>
                <th width="100px">Tahap</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $rangking = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr class="text-center">
                    <td><?= $no++; ?></td>
                    <td class="text-center"><span class="badge rounded-pill fs-5 bg-primary"> <?= $rangking++ ?></span></td>
                    <td class="text-left"><?= $dt['nama_siswa']; ?></td>

                    <td>
                        <?php

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

                        $nilaiAkhir = nilaiAkhir([$opC1, $opC2, $opC3, $opC4]);
                        echo $nilaiAkhir;
                        ?>
                    </td>

                    <td>Tahap</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>