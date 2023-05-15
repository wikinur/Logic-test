<?php
function cetakAngka($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "EduWork <br>";
        } else if ($i % 3 == 0) {
            echo "Edu <br>";
        } else if ($i % 5 == 0) {
            echo "Work <br>";
        } else {
            echo $i;
            echo "<br>";
        }
    }
}

cetakAngka(30);
