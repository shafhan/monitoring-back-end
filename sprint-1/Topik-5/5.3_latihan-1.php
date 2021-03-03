<?php 

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];


// soal 1
echo "+++++++++++++++++++++++++++"."\n\n";
echo "Daftar santri berdasarkan nomor induk"."\n\n";
soal1($students, 'id')."\n";


// soal 2
echo "+++++++++++++++++++++++++++"."\n\n";
echo "Daftar santri berdasarkan nama yang terkecil hingga terbesar"."\n\n";
soal2($students, 'name')."\n";

// soal 3
echo "+++++++++++++++++++++++++++"."\n\n";
echo "Daftar santri yang minat PHP"."\n\n";
soal3($students, 'division', 'PHP Backend')."\n";

// soal 4
echo "+++++++++++++++++++++++++++"."\n\n";
echo "jumlah santri yang umurnya kurang dari 25 tahun"."\n\n";
echo soal4($students, 'age', '25') . " siswa memiliki umur dibawah 25 tahun" . "\n";

// soal 5
echo "+++++++++++++++++++++++++++"."\n\n";
echo "Rata-rata umur santri"."\n\n";
echo soal5($students, 'age') . " adalah mean dari array students"."\n";

// soal 6
echo "+++++++++++++++++++++++++++"."\n\n";
echo "Santri paling muda"."\n\n";
soal6($students, 'age');


function soal1($students, $index):void {

    $urutan = [];

    foreach ($students as $key => $value) {
        $urutan[$value[$index]] = $value;
    }

    ksort($urutan);
    
    print_r($urutan);
};


function soal2($students, $index):void {

    $urutan = [];

    foreach ($students as $key => $value) {
        $urutan[$value[$index]] = $value;
    }
    ksort($urutan);
    print_r($urutan);
};


function soal3($students, $index, $cari):void {
    
    $urutan = [];

    foreach ($students as $key => $value) {
        if ($value[$index] == $cari) {
            $urutan[] = $value;
        }
    }
    print_r($urutan);
};

function soal4($students, $index, $age):void {
    foreach ($students as $key => $value) {
        if ($value[$index] < $age) {
            $urutan[] = $value;
            // print_r($urutan);
        }
    }
    echo count($urutan);
};

function soal5($students, $index) {
    $jmlh_age = 0;
    foreach ($students as $key => $value) {
        $jmlh_age+= $value[$index];
        $mean = $jmlh_age / count($students);
        // print_r($value);
    }
    
    return $mean;
};

function soal6($students, $index):void {
    foreach ($students as $key => $value) {
        $urutan[$value[$index]] = $value;
    }
    ksort($urutan);
    print_r(array_slice($urutan, 0, true));
};