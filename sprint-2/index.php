<?php

class Santri {
    public $name;
    public $hei;
    public $address;

    function greeting($name, $address) {
        echo "Hello " . $name . " " . " dari " . $address;
    }

    function sapa($hei) {
        echo "Hello " . $hei;
    }
}

$santri = new Santri();
$santri->greeting("Safuh", "Cianjur");

echo "===================" . "\n";
echo "|                 |" . "\n";
echo "|  Selamat datang |" . "\n";
echo "| di perpustakaan |" . "\n";
echo "|      Kami       |" . "\n";
echo "|                 |" . "\n";
echo "===================" . "\n";