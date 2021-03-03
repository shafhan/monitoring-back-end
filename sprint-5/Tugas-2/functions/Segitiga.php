<?php

namespace Segitiga;

class Segitiga 
{
    public function segitiga($alas=0, $tinggi=0, $sisi1=0, $sisi2=0)
    {
        if (isset($_POST['keliling_segitiga']))
        {
            return $alas + $sisi1 + $sisi2;
        } elseif (isset($_POST['luas_segitiga']))
        {
            return $alas * $tinggi / 2;
        }
    }
}