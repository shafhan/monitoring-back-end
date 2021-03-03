<?php
include('functions.php');
if (isset($_POST['tambah'])) {
    if ($data->tambah($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan');
                </script>
            ";
        header('Location: beranda.php');
    }  else {
        echo "
                <script>
                    alert('Data gagal ditambahkan');
                </script>
            ";
    }
}
// $data_santri = $data->showAll("SELECT * FROM santri");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="divisi">Divisi: </label>
                <input type="text" name="divisi" id="divisi" required>
            </li>
            <li>
                <label for="asal">Asal: </label>
                <input type="text" name="asal" id="asal" required>
            </li>
            <li>
                <input type="submit" name="tambah" required>
            </li>
        </ul>
    </form>
</body>
</html>