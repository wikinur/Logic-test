<?php
function kabisat($tahun)
{
    if ($tahun % 400 == 0) {
        echo $tahun . " adalah tahun kabisat";
    } else if ($tahun % 100 == 0) {
        echo $tahun . " adalah bukan tahun kabisat";
    } else if ($tahun % 4 == 0) {
        echo $tahun . " adalah tahun kabisat";
    } else {
        echo $tahun . " adalah bukan tahun kabisat";
    }
}

kabisat(2021);
