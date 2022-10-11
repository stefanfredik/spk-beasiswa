<?php

#bobot      = nilai hasil perhitungan dari kriteria/ fungsi sudah ada.
#total      = nilai kriteria tertentu dari setiap siswa

function normalisasi(float $bobot, array $total): float {
    $nilai = 0;
    foreach ($total as $arr) {
        $nilai += pow($arr, 2);
    }

    return number_format($bobot / sqrt($nilai), 4);
}




// function test(float $bobot, array $total) {
//     $nilai = 0;
//     foreach ($total as $arr) {
//         $nilai += pow($arr, 2);
//     }

//     echo $nilai . PHP_EOL;
//     echo number_format(sqrt($nilai), 2);


//     // return number_format($bobot / sqrt($nilai), 4) . PHP_EOL;
// }


#bobot      = hasil perhitungan dari kriteria/ fungsi sudah ada.
#nilai      = 

function optimasi($nilai, $bobot): float {
    return number_format($nilai * $bobot, 4);
}


# optimasi  = setiap  nilai optimasi dari masing-masing kriteria dari setiap siswa.

function nilaiAkhir(array $dt) {
    $max = $dt[0] + $dt[1];
    $min = $dt[2] + $dt[3];

    return $max - $min;
}





echo $nilai = normalisasi(3, [4, 4, 4, 3, 4, 3, 3, 4, 2]) . PHP_EOL;
echo $optimasi = optimasi($nilai, 0.27) . PHP_EOL;

$data = [0.1025, 0.1070, 0.0247, 0.0570];
echo nilaiAkhir($data) . PHP_EOL;

// -----------------------------------------------------------------




(int)$jumNilaiKriteria;

#data semua kriteria
$kriteria = array();


function hitungMoora(array $kriteria, array $dataPeserta) {
    foreach ($kriteria as $i => $k) {
        $bobot[$i] = bobotPenghasilan($k['kriteria']);
        $allC[$i] = array();
        array_push($allC[$i],)
    }
}

$variable = ["nenas", "mangga", "jeruk", "manggis"];

$no = 1;
foreach ($variable as $key => $value) {
    echo $no++ . " : " . $value . PHP_EOL;
}
