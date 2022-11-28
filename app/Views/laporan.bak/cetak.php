<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        thead {
            background-color: gray;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .footer {
            float: right;
        }

        .kepsek {
            margin-bottom: 5rem;
            text-align: center;
        }

        .tanggal {
            text-align: text-center;
        }
    </style>
</head>

<body>
    <h1>Laporan Hasil Seleksi Beasiswa</h1>
    <hr>
    <table width="100%" colspacing="0">
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
        <thead class="table-light">
            <tr>
                <th style="text-align: center">No</th>

                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>Rangking</th>
                <th>Nilai</th>
                <th>Kriteria</th>
                <th>Tahap</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $rangking = 1;
            foreach ($dataPeserta as $dt) : ?>
                <tr>
                    <td style="text-align: center"><?= $no++; ?></td>
                    <td style="text-align: left"><?= $dt['nama_siswa']; ?></td>
                    <td class="text-left"><?= $dt['nisn']; ?></td>

                    <td class="text-center"><span class="

                        <?php if ($rangking == 1 || $rangking == 2  || $rangking == 3) {
                            echo 'bg-primary';
                        } else {
                            echo 'bg-secondary';
                        }; ?>

                        badge rounded-pill fs-5"> <?= $rangking++ ?></span></td>


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

    <div class="footer">
        <p class="tanggal">Denpasar, </p>
        <p class="kepsek">Kepala Sekolah</p>
        <p class="nama">( ...................................... )</p>
    </div>

</body>

</html>