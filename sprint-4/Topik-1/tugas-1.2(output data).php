<?php
include('tugas-1.2(function).php');
$output = $call->showAll("SELECT * FROM data_barang");
// print_r($this->rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output data</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        nav {
            height: 250px;
            background-color: purple;
            color: white;
        }
        div#words {
            padding: 40px 50px;
            text-align: center;
        }
        #words h2 {
            font-size: 50px;
        }
        #words h4 {
            font-size: 25px;
        }
        body {
            background-color: rgba(0, 0, 0, .2);
        }
        table {
            border-top: 10px solid royalblue;
            border-bottom: 10px solid royalblue;
            margin: 50px auto;
        }
        table th {
            font-size: 30px;
            padding: 25px;
        }
        table td {
            font-size: 24px;
            padding: 20px;
        }
        form {
            text-align: center;
        }
        form button {
            border: 5px solid royalblue;
            border-radius: 35px;
            margin-bottom: 50px;
        }
        form button a {
            padding: 20px 30px;
            font-size: 20px;
            color: red;
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <div id="words">
            <h2>You can</h2>
            <h4>insert, edit, and remove data</h4>
            <h2>for your bussiness</h2>
        </div>
    </nav>
    <table border="1" width="80%" height="200px">
        <tr>
            <th colspan="3">Budi's data</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Do</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach ($output as $row): ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td align="center"><?= $row['nama_barang'] ?></td>
            <td align="center"><a href="tugas-1.2(edit data).php?id=<?=$row['id']?>">EDIT</a> OR <a href="tugas-1.2(hapus data).php?id=<?=$row['id']?>">DELETE</a></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <form action="" method="post">
        <button type="submit" name="add"><a href="tugas-1.2(tambah data).php">Add something</a></button>
    </form>
</body>
</html>