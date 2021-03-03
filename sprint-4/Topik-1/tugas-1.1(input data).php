<?php
if(isset($_POST['post'])) 
{
    if (isset($_POST['nama_barang']) || isset($_POST['harga'])) 
    {
        header('Location: page-view.php');
        exit;
    }
} elseif(isset($_GET['get']))
{
    if (isset($_GET['nama_kurir']) || isset($_GET['nama_pengirim']) || isset($_GET['asal_barang']) || isset($_GET['tujuan'])) {
        header('Location: page-view.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
    <style>
    span {
        color: red;
    }
    </style>
</head>
<body>
    
<h4>MEASUKKAN DATA KE DATABASE DENGAN <span>POST</span></h4>
<form action="page-view.php" method="post">
    <ul>
        <li>
            <label for="barang">Nama barang:</label>
            <input type="text" name="nama_barang" id="barang" required>
        </li> 
        <li>
            <label for="harga">Harga:</label>
            <input type="text" name="harga" id="harga" required>
        </li>       
        <li>
            <button type="submit" name="post">POST!</button>
        </li>
    </ul>
</form>
<br>
<br>
<br>
<br>
<h4>MEASUKKAN DATA KE DATABASE DENGAN <span>GET</span></h4>
<form action="page-view.php" method="get">
    <ul>
        <li>
            <label for="kurir">Nama kurir:</label>
            <input type="text" name="nama_kurir" id="kurir" required>
        </li> 
        <li>
            <label for="pengirim">Nama pengirim:</label>
            <input type="text" name="nama_pengirim" id="pengirim" required>
        </li>
        <li>
            <label for="asal">Asal barang:</label>
            <input type="text" name="asal_barang" id="asal" required>
        </li>
        <li>
            <label for="tujuan">Tujuan barang:</label>
            <input type="text" name="tujuan_barang" id="tujuan" required>
        </li>
        <li>
            <button type="submit" name="get">GET!</button>
        </li>
    </ul>
</form>

</body>
</html>