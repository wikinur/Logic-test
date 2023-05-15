<?php
$angka = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$output = [];

foreach ($angka as $value) {
    if ($value >= $low && $value <= $high) {
        $output[] = $value;
    }
}

print_r($output);
