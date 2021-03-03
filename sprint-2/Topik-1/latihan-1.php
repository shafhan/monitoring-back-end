<?php 

class Perpustakaan 
{
    public $listBuku = 'buku IPS';
    public function __construct() {
        $a = "haha";
        // echo $a;
    }
}

class Pengunjung extends Perpustakaan 
{
    public $namaPengunjung = 'Safuh';

    public function yeah()
    {
        echo "===================" . "\n";
        echo "|                 |" . "\n";
        echo "|  Selamat datang |" . "\n";
        echo "| di perpustakaan |" . "\n";
        echo "|      Kami       |" . "\n";
        echo "|                 |" . "\n";
        echo "===================" . "\n";
        
    
        echo $a;
        // echo "$this->namaPengunjung ingin meminjam $this->listBuku" . "\n";
        // echo "Pada hari senin 01-januari-2020" . "\n";
        // echo "Dan akan dikembalikan pada hari rabu 03-januari-2020" . "\n";
    
        echo "===================" . "\n";    
        echo "|                 |" . "\n";
        echo "|  Terima kasih   |" . "\n";
        echo "|       &         |" . "\n";
        echo "|  Selamat datang |" . "\n";
        echo "|     kembali     |" . "\n";
        echo "|                 |" . "\n";
        echo "===================" . "\n";

        
        
    }

}


$minjam = new Pengunjung();
$minjam->yeah();
?>
