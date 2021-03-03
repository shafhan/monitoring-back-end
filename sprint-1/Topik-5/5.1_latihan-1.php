<?php

function calcRectangleArea(int $width, int $length) {
    $luas_persegi_panjang = $width * $length;
    return $luas_persegi_panjang;
};

echo calcRectangleArea(5, 10). "\n";
