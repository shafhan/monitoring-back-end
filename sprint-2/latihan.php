<?php
// class A {
// 	var $TES = "Class A";
// 	function __construct() {
// 	}
// }

// class B {
// 	var $TES = "Class B";
// 	function __construct() {
// 		$this->b = new A(); // Memanggil class A
// 	}
// 	function index() {
// 		echo "memanggil TES sendiri hasilnya : " . $this->TES . "\n";
// 		echo "memanggil TES lain hasilnya : " . $this->b->TES . "\n";
// 	}
// }

// $Var = new B();
// $Var->index();

// class hewan{

//     public function __construct($nama){
// 		echo "Nama dia adalah " . $nama . " ";
//     }
	
// 	public static function identitas($nama) {
// 		echo "Dan nama saya " . $nama . "\n";
// 	}
// }
// $saha = new hewan('Biji');
// $saha::identitas('Mwehehe');

// static

// class Welcome 
// {
// 	public static $haha = "=====";

// 	public static function kotak() {
// 		echo self::$haha;
// 	}
// }

// $manggil = new Welcome();
// $manggil::kotak();



// $filename = '/var/www/html/index.php';

// if (file_exists($filename)) {
//     echo "The file $filename exists";
// } else {
//     echo "The file $filename does not exist";
// }

// $array = [1,2];
// $total=0;
// foreach ($array as $key => $value) {
// 	// echo $value;
// 	$total+=$value;
// 	echo $total . "\n";
// }
function change($data1, $data2) {
	echo $hasil = $data1 + $data2;
}
$data1 = trim(fgets(STDIN));
$data2 = trim(fgets(STDIN));

try {
	if($data1 === "" && $data2 === "") {
		throw new Exception("Kurang dari 5 woy hasilnya");
	}
	change($data1, $data2);
} catch (Exception $e) {
	echo "ERROR " . $e->getMessage();
}
?>