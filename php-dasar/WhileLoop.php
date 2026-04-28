<?php

$counter = 1;

while ($counter <= 10) {
    echo "ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

// alternatif tanpa kurung kurawal
while ($counter <= 10):
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;