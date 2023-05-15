<?php
function hurufAngka($angka)
{
    $angka = abs($angka);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $output = "";
    if ($angka < 12) {
        $output = "" . $huruf[$angka];
    } else if ($angka < 20) {
        $output = hurufAngka($angka - 10) . " belas";
    } else if ($angka < 100) {
        $output = hurufAngka($angka / 10) . " puluh " . hurufAngka(($angka % 10));
    } else if ($angka == 100) {
        echo "seratus";
    } else {
        echo "Silahkan masukkan angka 1 -100";
    }

    return $output;
}

echo hurufAngka(95);
