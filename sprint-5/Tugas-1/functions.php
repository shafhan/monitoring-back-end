<?php

namespace functions;

class Penghitung
{
    public function __construct()
    {
        echo "<h2>Hasilnya adalah </h2> ";
    }
}

class Lingkaran extends Penghitung 
{
    public static function lingkaran($ruas)
    {
        if ($ruas % 7 == 0)
        {
            $phi = 22/7;
            if (isset($_POST['keliling_lingkaran'])) 
            {
                return 2 * $phi * $ruas;
            }elseif (isset($_POST['luas_lingkaran']))
            {
                return $phi * $ruas ** 2;
            }
            
        } else 
        {
            $phi = 3.14;
            if (isset($_POST['keliling_lingkaran'])) 
            {
                return 2 * $phi * $ruas;
            }elseif (isset($_POST['luas_lingkaran']))
            {
                return $phi * $ruas ** 2;
            }
        }
    }
}

class Segitiga extends Penghitung 
{
    public static function segitiga($alas=0, $tinggi=0, $sisi1=0, $sisi2=0)
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

class Persegi extends Penghitung 
{
    public static function persegi($panjang, $lebar)
    {
        if (isset($_POST['keliling_persegi']))
        {
            return (2 * $panjang) + (2 * $lebar);
        } elseif (isset($_POST['luas_persegi']))
        {
            return $panjang * $lebar;
        }
    }
}