<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil get & post</title>
</head>
<body>
    <?php if (isset($_POST['post'])):?>
    <table border="2" cellpadding="5">
        <tr>
            <th colspan="2">Hasil dari kiriman data dengan POST</th>
        </tr>
        <tr>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
        </tr>
        <tr>
            <td><?= $_POST['nama_barang'] ?></td>
            <td><?= $_POST['harga'] ?></td>
        </tr>
    </table>
    <?php elseif(isset($_GET['get'])):?>
        <table border="2" cellpadding="5">
            <tr>
                <th colspan="4">Hasil dari kiriman data dengan GET</th>
            </tr>
            <tr>
                <th>NAMA KURIR</th>
                <th>NAMA PENGIRIM</th>
                <th>ASAL BARANG</th>
                <th>TUJUAN BARANG</th>
            </tr>
            <tr>
                <td><?= $_GET['nama_kurir'] ?></td>
                <td><?= $_GET['nama_pengirim'] ?></td>
                <td><?= $_GET['asal_barang'] ?></td>
                <td><?= $_GET['tujuan_barang'] ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>