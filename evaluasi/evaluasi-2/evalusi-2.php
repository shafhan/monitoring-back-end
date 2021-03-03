<?php

class DataSantri 
{
    public static $santri = 
    [
        [
            'nama' => 'mahmoud',
            'nik' => 'T001'
        ],
        [
            'nama' => 'jabre',
            'nik' => 'T002'
        ],
        [
            'nama' => 'mabre',
            'nik' => 'T003'
        ]
    ];

    public function __construct() {
        echo "Selamat datang didata sekolah!\n";
        echo "mau apa?\n";
        echo "1. menambah data santri\n";
        echo "2. mengganti data santri\n";
        echo "3. menghapus data santri\n";
    }
}

class Todo extends DataSantri
{
    public static function tambahSantri() {
        $lagi = true;
        while ($lagi) {
            echo "Masukkan nama santri: ";
            $namaSantri = trim(fgets(STDIN));
            echo "\n";
    
            echo "Masukkan NIK santri: ";
            $nikSantri = trim(fgets(STDIN));
            echo "\n";
    
            $penambahan = 
            [
                'nama' => $namaSantri,
                'nik' => $nikSantri
            ];
            array_push(self::$santri, $penambahan);
            
            
            echo "tambah lagi atau sudah(ya/tidak)?";
            $keputusan = trim(fgets(STDIN));
            
            if ($keputusan == 'ya') {
                    $lagi = true;
                } elseif ($keputusan == 'tidak') {
                $lagi = false;
            }
            
            print_r(self::$santri);
        }
    }

    public static function delete() {
        print_r(self::$santri);
        
        echo "tulis nama data yang akan dihapus:";
        $hapus = trim(fgets(STDIN));
        echo "\n";
        foreach (self::$santri as $key => $value) {

            $coba[$value['nama']] = $value;
            if ($hapus == $value['nama']) {
                unset($coba[$hapus]);
                // print_r($coba);
                print_r($coba);
            }
        }
    }

    public static function running() {
        echo "Mau merubah apa?";
        $todo = trim(fgets(STDIN));
        echo "\n"; 

        if ($todo == 1) {
            self::tambahSantri();
        } elseif ($todo == 3) {
            self::delete();
        }
    }
}

class Update extends DataSantri
{
    public static function update() {
        // print_r(self::$santri);
        $i=1;
        foreach (self::$santri as $key => $value) {
            echo $i . ". ". $value['nama']. "\n";
            $i++;
        }
        echo "tulis nama data yang akan diupdate: ";
        $pilih = trim(fgets(STDIN));
        
        echo "\n";
        echo self::$santri[$pilih-1]['nama']." ".self::$santri[$pilih-1]['nik'];
        self::$santri[$pilih-1]['nama']='ahmad';

        echo "\n";
        echo self::$santri[$pilih-1]['nama']." ".self::$santri[$pilih-1]['nik'];
        // $dataLama = self::$santri;
        foreach (self::$santri as $key => $value) {
            if ($pilih == $value['nama']) {
                self::$santri[$key]['nama'] = 'some';
                $value['nik'] = 'thing';
                var_dump($value['nama']); die;

            }
        // };
        return self::$santri;
    }
}


// Delete::delete();
Update::update();
// print_r(DataSantri::$santri);
// $data = new DataSantri;
// ($data::$santri);

// $santri = new DataSantri();
// Todo::running();



?>