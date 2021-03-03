<?php

$array = [5, 9, 6, 7, 9, 8, 10, 7, 8];
$total_data = array_sum($array);
$jumlah_data = count($array);

$mean = round($total_data / $jumlah_data);

echo "Mean-nya adalah " . $mean . "\n";