<?php 

class Perpustakaan 
{
    public static $daftarBuku =
    [
        [
            'id' => 0,
            'judul' => 'Spongebob: the last movie',
            'isbn' => 24932481,
            'pengarang' => 'herp'
        ],
        [
            'id' => 1,
            'judul' => 'The tale of guardian',
            'isbn' => 86759483,
            'pengarang' => 'wazozki'
        ],
        [
            'id' => 2,
            'judul' => 'AOT: the worst man',
            'isbn' => 86759483,
            'pengarang' => 'wazozki'
        ]
    ];

    public function __construct() {
        echo "!========================!" . "\n";   
        echo "#         ようこそ       #" . "\n";
        echo "#     マンガライブラリ   #" . "\n";
        echo "!========================!" . "\n\n";
        
    }

    public static function donasiBuku() {
        $lagi = true;
        while ($lagi) {
            echo "Judul: ";
            $judul = trim(fgets(STDIN));
            echo "\n";
            
            echo "Seri Isbn: ";
            $isbn = trim(fgets(STDIN));
            echo "\n";
    
            echo "Nama pengarang: ";
            $pengarang = trim(fgets(STDIN));
            echo "\n";
    
            $nambahBuku = [
                'judul' => $judul,
                'isbn' => $isbn,
                'pengarang' => $pengarang
            ];
            
            echo "Anda yakin akan mendonasikan buku tersebut?";
            $keputusan = trim(fgets(STDIN));
            if ($keputusan == 'ya') {
                array_push(self::$daftarBuku, $nambahBuku);
    
                echo "->Buku dengan data lengkap berikut:\n";
                echo 'Judul = ' . $nambahBuku['judul'] . "\n";
                echo 'isbn = ' . $nambahBuku['isbn'] . "\n";
                echo 'pengarang = ' . $nambahBuku['pengarang'] . "\n\n";

                echo "Berhasil didonasikan\n";
    
                echo "ありがとうございました!\n\n";
            } elseif ($keputusan == 'tidak') {
                
                echo "ここを訪問していただきありがとうございます\n\n";
            }

            print_r(self::$daftarBuku);
            
            echo "Mau donasi lagi?";
            $kepastian = trim(fgets(STDIN));
    
            if ($kepastian == 'ya') {
            } elseif ($kepastian == 'tidak') {
                $lagi = false;
            }
        }
    } 
}

class Pengunjung extends Perpustakaan 
{
    public static function meminjam() {
        echo "ようこそ、あなたは何が欲しいですか？" . "\n";
        echo "What do i can do for you?" . "\n";
        echo "Choose what do you want" . "\n\n";

        echo "sebelum melakukan apapun ada baiknya kita saling mengenal satu sama lain\n";
        echo "Nama saya pico, siapa nama kamu?\n\n";
        
        echo "nama: ";
        $nama = trim(fgets(STDIN));

        echo "umur:";
        $umur = trim(fgets(STDIN));
        $umr = (int)$umur;
        echo "\n";

        

        echo "1. meminjam buku\n";
        echo "2. mengembalikan buku\n";
        echo "3. donasi buku\n";
        echo "Pilih 1/2/3: ";
        $pilihan = trim(fgets(STDIN));
        echo "\n";

        try {
            if($pilihan == 1 || $pilihan == 2 || $pilihan == 3) {
            }else {
                throw new Exception("Pilih antara 1, 2, atau 3!\n");
            }
        } catch (Exception $err) {
            echo $err->getMessage();
        }
        
        if ($pilihan == 1) {
            foreach (self::$daftarBuku as $key => $value) {
                echo "ID : " . $value['id'] . "\n";
                echo "Judul : " . $value['judul'] . "\n";
                echo "ISBN : " . $value['isbn'] . "\n";
                echo "Pengarang : " . $value['pengarang'] . "\n\n";
            }
            
            echo "Pilih buku mana yang ingin anda pinjam dengan menuliskan idnya\n";
            echo "ID: ";
            $pilihanBuku = trim(fgets(STDIN));
            echo "\n";
            
            foreach (self::$daftarBuku as $key => $value) {
                if ($pilihanBuku == $key) {
                    
                    
                    echo "<=================================>\n";
                    echo " DATA PEMINJAMAN PERPUSTAKAAN PICO\n";
                    echo "<=================================>\n";

                    echo "Nama: " . $nama . "\n";
                    echo "Umur: " . $umur . "\n";
                    
                    echo "->Buku yang dipinjam:\n";
                    echo 'Judul: ' . $value['judul'] . "\n\n";
                    
                    echo "<=================================>\n";
                    echo " DATA PEMINJAMAN PERPUSTAKAAN PICO\n";
                    echo "<=================================>\n\n";
                    self::dataPeminjaman($nama,$umr);
                    try {
                        if($nama == "" || $umr < 0 ) {
                            throw new Exception("Nama atau umur tidak boleh kosong!\n\n");
                        } 
                    } catch (Exception $err) {
                        echo $err->getMessage();
                    }
                    
                    // mengambil buku yang dipinjam dan disimpan di variable $ambilBuku
                    $ambilBuku = $value;
                }
                
            }
            unset(self::$daftarBuku[$pilihanBuku]);
            
            echo "++> Sisa buku:\n\n";
            
            foreach (self::$daftarBuku as $key => $value) {
                $minjam = $value;
                echo "ID : " . $value['id'] . "\n";
                echo "Judul : " . $value['judul'] . "\n";
                echo "ISBN : " . $value['isbn'] . "\n";
                echo "Pengarang : " . $value['pengarang'] . "\n\n";
            }

            echo "++> Mau langsung ngembaliin buku (iya/tidak)? ";
            $balikinBuku = trim(fgets(STDIN));
            echo "\n";

            if ($balikinBuku == 'iya') {
                echo "Buku dengan judul: \n\n";
                echo "==>" . $ambilBuku['judul'] . "\n\n";
                echo "telah berhasil dikembalikan\n";
                echo "ありがとうございました!\n";

            } elseif ($balikinBuku == 'tidak') {
                echo "ありがとうございました!\n";
            }
        } elseif ($pilihan == 2) {
            echo "Anda ingin mengembalikan buku dengan id?: ";
            $idBuku = trim(fgets(STDIN));
            echo "\n";
            
            foreach (self::$daftarBuku as $key => $value) {
                if ($idBuku == $key) {
                    echo "Anda telah meminjam buku dan akan mengembalikan buku dengan : " . "\n\n";
                    echo "Judul : " . $value['judul'] . "\n";
                    echo "ISBN : " . $value['isbn'] . "\n";
                    echo "Pengarang : " . $value['pengarang'] . "\n\n";
                }
            }
        } elseif ($pilihan == 3) {
            self::donasiBuku();
        }
    }

}

// $pengunjung = new Pengunjung();
Pengunjung::meminjam();
// $pengunjung::
// Pengunjung::nambahin();
// $db = Pengunjung::$daftarBuku;
// print_r($db);