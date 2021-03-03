<?php
include('functions.php');
$id = $_GET['id'];
if ($data->hapus($id) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus');
            </script>
        ";
    header('Location: beranda.php');
}  else {
    echo "
            <script>
                alert('Data gagal dihapus');
            </script>
        ";
}
