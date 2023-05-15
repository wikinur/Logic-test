<?php
$array = [4, 2, 6, 88, 3, 11];

$low = $array[0];
$high = $array[0];
$hitung = count($array);

for ($i = 0; $i < $hitung; $i++) {
    if ($low > $array[$i]) {
        $low = $array[$i];
    }

    if ($high < $array[$i]) {
        $high = $array[$i];}
}

echo "low : " . $low . " , high: " . $high;
