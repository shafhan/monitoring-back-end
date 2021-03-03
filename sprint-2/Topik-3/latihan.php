<?php

// Mencari keliling dan luas persegi panjang

class FoundPersegiPanjang
{
    public static function persegiPanjang($panjang, $lebar)
    {
        echo "Panjang = " . $panjang . "\n";
        echo "Lebar = " . $lebar . "\n";
        
        $keliling_persegiPanjang = 2 * ($panjang + $lebar);
        $luas_persegiPanjang = $panjang * $lebar;
        
        echo "Kelilingnya adalah " . $keliling_persegiPanjang . "\n";
        echo "Dan Luasnya adalah " . $luas_persegiPanjang . "\n\n";

        
    }
}

echo "##############################\n";
echo "**     PERSEGI PANJANG      **\n";
echo "##############################\n\n";

echo "Tentukan panjang untuk persegi panjang: ";
$panjang = trim(fgets(STDIN));
echo "Tentukan lebar untuk persegi panjang: ";
$lebar = trim(fgets(STDIN));
echo "\n";

try {
    $foundPersegiPanjang = new FoundPersegiPanjang();
    if ($panjang < 0 && $lebar < 0) {
        throw new Exception("Nilai dari panjang dan lebar tidak boleh 0 atau minus!\n\n");
    } elseif ($panjang < 0) {
        throw new Exception("Nilai panjang tidak boleh 0 atau minus!\n\n");
    } elseif ($lebar < 0) {
        throw new Exception("Nilai lebar tidak boleh 0 atau minus!\n\n");
        
    }
    $foundPersegiPanjang::persegiPanjang($panjang, $lebar);
} catch (Exception $e) {
    echo 'ERROR ' . $e->getMessage();
}


// Mencari keliling dan luas lingkaran

class FoundLingkaran
{
    public static function lingkaran($ruas)
    {
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
echo "#################################\n";
echo "!      menghitung lingkaran     !\n";
echo "#################################\n\n";
echo "Tentukan ruas untuk lingkaran: ";
$ruas = trim(fgets(STDIN));
echo "\n";
// $ru = (int)$ruas;
try {
    $foundLingkaran = new FoundLingkaran();
    if ($ruas < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    } 
    $foundLingkaran::lingkaran($ruas);
} catch (Exception $e) {
    echo 'ERROR ' . $e->getMessage();
}


// // Mencari keliling dan luas trapesium

class FoundTrapesium
{
    public static function trapesium($alas, $sisiKiri, $sisiKanan, $bagianAtas, $tinggi)
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
        echo "Dan Luasnya adalah " . $luas_trapesium . "\n\n";
    }
}
echo "#################################\n";
echo "!      menghitung trapesium     !\n";
echo "#################################\n\n";
echo "Tentukan alas untuk trapesium: ";
$alas = trim(fgets(STDIN));
echo "Tentukan sisi kiri untuk trapesium: ";
$sisiKiri = trim(fgets(STDIN));
echo "Tentukan sisi kanan untuk trapesium: ";
$sisiKanan = trim(fgets(STDIN));
echo "Tentukan sisi bagian atas untuk trapesium: ";
$bagianAtas = trim(fgets(STDIN));
echo "Tentukan tinggi untuk trapesium: ";
$tinggi = trim(fgets(STDIN));
echo "\n";
try {
    $foundTrapesium = new FoundTrapesium();
    if ($alas < 0 && $sisiKiri < 0 && $sisiKanan < 0 && $bagianAtas < 0 && $tinggi < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    } elseif ($alas < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    } elseif ($sisiKiri < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    } elseif ($sisiKanan < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    } elseif ($bagianAtas < 0) {
        throw new Exception("Nilai ruas tidak boleh 0 atau minus!\n\n");
    }
    $foundTrapesium::trapesium($alas, $sisiKiri, $sisiKanan, $bagianAtas, $tinggi);
} catch (Exception $e) {
    echo 'ERROR ' . $e->getMessage();
}
