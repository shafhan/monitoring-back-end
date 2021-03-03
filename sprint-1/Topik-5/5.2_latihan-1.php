<?php




// fungsi menghitung keliling dan luas  segitiga

$segitiga = function(int $sisiA, int $sisiB, int $sisiC, int $alas, int $tinggi) {
    
    // menghitung    
    $keliling = $sisiA + $sisiB + $sisiC . "\n";
    $luas = ($alas * $tinggi) / 2 . "\n\n";

    $hasil = "Segitiga dengan"."\n"."sisi a = ". $sisiA."\n"."sisi b = ".$sisiB."\n"."sisi c = ".$sisiC."\n"."alas = ".$alas."\n"."tinggi = ".$tinggi."\n"."Kelilingnya adalah ".$keliling."Dan Luasnya adalah ".$luas; 
    
    // menampilkan output
    return $hasil;
};


// // fungsi menghitung keliling dan luas  lingkaran

$lingkaran = function(int $ruas) {
    if ($ruas % 7 == 0) {
        $phi = 22/7;
        
        // menghitung
        $keliling = 2 * $phi * $ruas . "\n";
        $luas = $phi * ($ruas**2) . "\n\n"; 
        
        // menampilkan output
        $hasil = "Lingkaran dengan"."\n"."ruas ".$ruas."\n"."Kelilingnya adalah ". $keliling."Dan Luasnya adalah ".$luas;

        return $hasil;
    } else {
        $phi = 3.14;
        
        // menghitung
        $keliling = 2 * $phi * $ruas . "\n";
        $luas = $phi * ($ruas**2) . "\n\n"; 
        
        // menampilkan output
        return $hasil = "Lingkaran dengan"."\n"."ruas ".$ruas."\n"."Kelilingnya adalah ". $keliling."Dan Luasnya adalah ".$luas;
    }
};


// fungsi menghitung keliling dan luas  trapesium

$trapesium = function(int $sisiA, int $sisiB, int  $sisiC,int $sisiD, int $alas, int $tinggi)  {
    /*
    alas = sisiA
    garis miring kanan = sisiB
    atas = sisiC
    garis miring kiri = sisiD
    */
    
    // mengitung
    $keliling = $sisiA + $sisiB + $sisiC + $sisiD . "\n";
    $luas = ($alas + $sisiC) * $tinggi / 2 . "\n\n";

    $hasil = "Keliling trapesium dengan"."\n"."sisi a = ".$sisiA."\n"."sisi b = ".$sisiB."\n"."sisi c = ".$sisiC."\n"."dan sisi d = ".$sisiD."\n"."Kelilingnya adalah ".$keliling."Dan Luasnya adalah ".$luas;

    // menampilkan output
    return $hasil;
};
// menampilkan seluruh output fungsi
echo $segitiga(2,3,4,10,5);
echo $lingkaran(7);
echo $trapesium(13, 7, 8, 5, 13, 4);