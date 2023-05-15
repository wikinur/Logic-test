<?php

function hitungAngka($input)
{
    $angka = 1;
    for ($i = 1; $i <= $input; $i++) {
        // 1 * 2 * 3 * 4
        $angka = $angka * $i;
    }
    return $angka;
}

$inputan4 = hitungAngka(4);
echo "inputan 4 : " . $inputan4 . "<br><br>";

$inputan8 = hitungAngka(8);
echo "inputan 8 : " . $inputan8;
