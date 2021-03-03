<?php

// menghitung luas lingkaran

$diameter = 9;
$phi = 3.14;
$ruas = $diameter / 2;

$luas_lingkaran = $phi * $ruas ** 2;
echo "Luas dari lingkaran dengan diameter ".  $diameter . " adalah ". $luas_lingkaran . "\n";

// menghitung keliling lingkaran

$keliling_lingkaran = $phi * $diameter;

echo "Keliling dari lingkaran dengan diameter ". $diameter . " adalah ". $keliling_lingkaran . "\n";
