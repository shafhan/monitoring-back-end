<?php

function __autoload($class) 
{
    include("functions/$class.php");
}
use Persegi\Persegi;
use Lingkaran\Lingkaran;
use Segitiga\Segitiga;

require 'functions/Lingkaran.php';
require 'functions/Segitiga.php';
require 'functions/Persegi.php';


$lg = new Lingkaran();
$sgt = new Segitiga();
$psg = new Persegi();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung bangun datar</title>
    <style>
    * {
        list-style: none;
    }
    body {
        background: linear-gradient(45deg, black, white);
        background-repeat: no-repeat;
        height: 100vh;
        color: #fff;
    }
    #left-side {
        float: left;
        width: 50%;
        height: 500px;
    }
    #right-side {
        float: right;
        width: 50%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #right-side h2 {
        text-align: center;
        font-size: 100px;
    }
    </style>
</head>
<body>
    <div id="left-side">
        <h1>Menghitung luas bangun datar</h1>
        <form action="" method="post">
        <div class="operasi">
            <ul>
                <li>
                    <label for="angka1-1">Angka 1: </label>
                    <input type="number" name="ruas" id="angka1-1">
                </li>
                <li>
                    <input type="submit" name="keliling_lingkaran" class="submit" value="keliling">
                    <input type="submit" name="luas_lingkaran" class="submit" value="luas">
                </li>
            </ul>
        </div>
        <div class="operasi">
            <ul>
                <li>
                    <label for="angka2-1">Alas : </label>
                    <input type="number" name="alas" id="angka2-1">
                </li>
                <li>
                    <label for="angka2-2">Tinggi : </label>
                    <input type="number" name="tinggi" id="angka2-2">
                </li>
                <li>
                    <label for="angka2-3">Sisi 1 : </label>
                    <input type="number" name="sisi1" id="angka2-3">
                </li>
                <li>
                    <label for="angka2-3">Sisi 2 : </label>
                    <input type="number" name="sisi2" id="angka2-3">
                </li>
                <li>
                    <input type="submit" name="keliling_segitiga" class="submit" value="keliling">
                    <input type="submit" name="luas_segitiga" class="submit" value="luas">
                </li>
            </ul>
        </div>
        <div class="operasi">
            <ul>
                <li>
                    <label for="angka3-1">Angka 1: </label>
                    <input type="number" name="panjang" id="angka3-1">
                </li>
                <li>
                    <label for="angka3-2">Angka 2: </label>
                    <input type="number" name="lebar" id="angka3-2">
                </li>
                <li>
                    <input type="submit" name="keliling_persegi" class="submit" value="keliling">
                    <input type="submit" name="luas_persegi" class="submit" value="luas">
                </li>
            </ul>
        </div>
        </form>
    </div>
    <div id="right-side">
        <h2><?php
            if (isset($_POST['keliling_lingkaran']))
            {
                $result = $lg->lingkaran($_POST['ruas']);
                echo $result;
            } elseif (isset($_POST['luas_lingkaran']))
            {
                $result = $lg->lingkaran($_POST['ruas']);
                echo $result;
            } elseif (isset($_POST['keliling_segitiga']))
            {
                $result = $sgt->segitiga($_POST['alas'], $_POST['tinggi'], $_POST['sisi1'], $_POST['sisi2']);
                echo $result;
            } elseif (isset($_POST['luas_segitiga']))
            {
                $result = $sgt->segitiga($_POST['alas'], $_POST['tinggi'], $_POST['sisi1'], $_POST['sisi2']);
                echo $result;
            } elseif (isset($_POST['keliling_persegi']))
            {
                $result = $psg->persegi($_POST['panjang'], $_POST['lebar']);
                echo $result;
            } elseif (isset($_POST['luas_persegi']))
            {
                $result = $psg->persegi($_POST['panjang'], $_POST['lebar']);
                echo $result;
            }
            ?>
        </h2>
    </div>
</body>
</html>