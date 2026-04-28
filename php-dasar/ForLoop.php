<?php

// for (; ; ) {
//     echo " Ini tidak akan berhenti";
// }

//perulangan dengan kondisi

// $counter = 1;
// for (; $counter <= 10; ) {
//     echo "ini adalah for loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// perulangan dengan init statement
// for ($counter = 1; $counter <= 10; ) {
//     echo "ini adalah for loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// perulangan dengan post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) {
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

// alternatif tidak menggunakan kurung kurawal
for ($counter = 1; $counter <= 10; $counter++):
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--):
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
endfor;