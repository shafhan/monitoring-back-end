<?php

// Mencari keliling dan luas persegi panjang

class FoundPersegiPanjang
{
    public static function persegiPanjang($panjang,$lebar)
    {
        echo "Persegi panjang dengan" . "\n";
        echo "Panjang = " . $panjang . "\n";
        echo "Lebar = " . $lebar . "\n";

        $keliling_persegiPanjang = 2 * ($panjang + $lebar);
        $luas_persegiPanjang =  $panjang * $lebar;

        echo "Kelilingnya adalah " . $keliling_persegiPanjang . "\n";
        echo  "Luasnya adalah " . $luas_persegiPanjang . "\n\n";
    }
}

// Mencari keliling dan luas lingkaran

class FoundLingkaran
{
    public static function lingkaran(int $ruas)
    {
        echo "Lingkaran dengan" . "\n";
        echo "Ruas = " . $ruas . "\n";

        if ($ruas % 7 == 0) {
            $phi = 22/7;
            $keliling_lingkaran = 2 * $phi * $ruas;
            $luas_lingkaran = $phi * ($ruas**2);

            echo "Kelilingnya adalah " . $keliling_lingkaran . "\n";
            echo "Dan Luasnya adalah " . $luas_lingkaran . "\n";
        } else {
            $phi = 3.14;
            $keliling_lingkaran = 2 * $phi * $ruas;
            $luas_lingkaran = $phi * ($ruas**2);

            echo "Kelilingnya adalah " . $keliling_lingkaran . "\n";
            echo "Dan Luasnya adalah " . $luas_lingkaran . "\n\n";
        }
    }
}

$foundLingkaran = new FoundLingkaran();
$foundLingkaran::lingkaran(7);

// Mencari keliling dan luas trapesium

class FoundTrapesium
{
    public static function trapesium(int $alas, int $sisiKiri, int $sisiKanan, int $bagianAtas, int $tinggi)
    {
        echo "Trapesium dengan" . "\n";
        echo "sisi kiri = " . $sisiKiri . "\n";
        echo "sisi kanan = " . $sisiKanan . "\n";
        echo "Alas = " . $alas . "\n";
        echo "Sisi atas = " . $bagianAtas . "\n";
        echo "Tinggi = " . $tinggi . "\n";

        $keliling_trapesium = $sisiKiri + $sisiKanan + $alas + $bagianAtas;
        $luas_trapesium = (($alas + $bagianAtas) * $tinggi) / 2;

        echo "Kelilingnya adalah " . $keliling_trapesium . "\n";
        echo "Dan Luasnya adalah " . $luas_trapesium . "\n";
        
    }
}

$foundTrapesium = new FoundTrapesium();
$foundTrapesium::trapesium(13, 5, 7, 8, 4);