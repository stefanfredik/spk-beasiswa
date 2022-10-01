<?php


function normalisasi(float $bobot, array $total): float {
    $nilai = 0;
    foreach ($total as $arr) {
        $nilai += pow($arr, 2);
    }

    return number_format($bobot / sqrt($nilai), 4);
}

function optimasi($nilai, $bobot): float {
    return number_format($nilai * $bobot, 4);
}
