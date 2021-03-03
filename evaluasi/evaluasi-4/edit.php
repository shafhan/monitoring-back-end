<?php
include('functions.php');
$id = $_GET['id'];
if (isset($_POST['edit'])) {
    if ($data->edit($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diedit');
                </script>
            ";
        header('Location: beranda.php');
    }  else {
        echo "
                <script>
                    alert('Data gagal diedit');
                </script>
            ";
    }
}
$data_santri = $data->showAll("SELECT * FROM santri WHERE id = $id")[0];
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
            <input type="hidden" name="id" value="<?= $data_santri['id'] ?>">
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?= $data_santri['nama'] ?>" required>
            </li>
            <li>
                <label for="divisi">Divisi: </label>
                <input type="text" name="divisi" id="divisi" value="<?= $data_santri['divisi'] ?>" required>
            </li>
            <li>
                <label for="asal">Asal: </label>
                <input type="text" name="asal" id="asal" value="<?= $data_santri['asal'] ?>" required>
            </li>
            <li>
                <input type="submit" name="edit">
            </li>
        </ul>
    </form>
</body>
</html>