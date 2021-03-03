<?php 

$array = [5, 9, 6, 7, 9, 8, 10, 7, 8];

$jmlh = count($array);
$median = ($jmlh-1)/2;
// echo $median;

for($i=0; $i < $jmlh;$i++) {
    if ($i == $median) {
        echo "Median-nya adalah " . $array[$i] . "\n";
    }
}