<?php

$nilai = 80;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}


// di php bisa dengan titik dua tanpa kurawal
if ($nilai >= 80 && $absen >= 80):
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai anda D" . PHP_EOL;
else:
    echo "Nilai anda E" . PHP_EOL;
endif;