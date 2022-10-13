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
                <th>NISN</th>

                <th>Nilai</th>
                <th>Kriteria</th>
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
                    <td class="text-center"><span class="

                    <?php if ($rangking == 1 || $rangking == 2  || $rangking == 3) {
                        echo 'bg-primary';
                    } else {
                        echo 'bg-secondary';
                    }; ?>

                    badge rounded-pill fs-5"> <?= $rangking++ ?></span></td>
                    <td class="text-left"><?= $dt['nama_siswa']; ?></td>
                    <td class="text-left"><?= $dt['nisn']; ?></td>


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
                    <td class="text-left">
                        <?php
                        $C = [$opC1, $opC2, $opC3, $opC4];
                        $maxC = max($C);
                        $iMax = array_search($maxC, $C);
                        switch ($iMax) {
                            case 0:
                                echo 'C1';
                                break;
                            case 1:
                                echo 'C2';
                                break;
                            case 2:
                                echo 'C3';
                                break;
                            case 3:
                                echo 'C4';
                                break;
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        $total = 1;

                        foreach ($tahap as $th) :
                            $total += $th['jumlah'];

                            if ($rangking <= $total) {
                                echo $th['tahap'];
                                break;
                            }

                            // echo "Total : " . $total;
                        ?>

                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>