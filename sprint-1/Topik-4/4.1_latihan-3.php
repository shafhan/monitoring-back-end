<?php
$array = [5, 9, 6, 7, 9, 8, 10, 7, 8];
$angka_sama = array_count_values($array);
arsort($angka_sama);
foreach($angka_sama as $key => $value) {
    echo "Modus-nya adalah " . $key . "\n";
    break;
}