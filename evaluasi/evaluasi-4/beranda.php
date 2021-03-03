<?php
include('functions.php');
session_start();
if (empty($_SESSION['user'])) {
    header('Location: login.php');
}
$data_santri = $data->showAll("SELECT * FROM santri");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <nav>
        <ul>
            <li><p>Beberapa data santri pondok it</p></li>
            <li>
                <form action="" method="post">
                    <input type="submit" name="logout" value="Log out">
                </form>
            </li>
        </ul> 
    </nav>
    <table border="1" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>DIVISI</th>
            <th>ASAL</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($data_santri as $santri):?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $santri['nama'] ?></td>
            <td><?= $santri['divisi'] ?></td>
            <td><?= $santri['asal'] ?></td>
            <td><a href="edit.php?id=<?= $santri['id'] ?>">edit</a> atau <a href="hapus.php?id=<?= $santri['id'] ?>" onclick="return confirm('Yakin mas bre, mau dihapus nih?');">Hapus</a></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5"><a href="tambah.php">Tambah data</a></td>
        </tr>
    </table>
</body>
</html>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
}
?>  