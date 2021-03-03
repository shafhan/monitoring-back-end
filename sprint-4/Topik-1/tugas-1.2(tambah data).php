<?php
include('tugas-1.2(function).php');
if (isset($_POST['add'])) {
    $call->add($_POST['nama_barang']);
    header('Location: tugas-1.2(output data).php');
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
        body {
            background-color: rgba(0, 0, 0, .2);
        }
        div#out {
            border: 5px solid royalblue;
            border-radius: 35px;
            height: 250px;
            width: 25%;
            margin: 250px auto;
            box-shadow: 5px 5px 50px 0 black;
        }
        div#in {
            padding-top: 50px;
        }
        div#in h2 {
            text-align: center;
        }
        div#in input {
            border: 3px solid royalblue;
            border-radius: 20px;
            font-size: 20px;
            height: 50px;
            width: 300px;
            margin-left: 17%;
        }
        div#in button {
            font-size: 20px;
            border: 2px solid black;
            border-radius: 35px;
            cursor: pointer;
            display: block;
            padding: 10px 20px;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div id="out">
        <div id="in">
            <form action="" method="post">
                <h2>Masukkan nama barang</h2>
                <input type="text" name="nama_barang" id="barang" autofocus autocomplete="off" required>
                <button type="submit" name="add">Insert it</button>
            </form>
        </div>
    </div>
</body>
</html>