<?php
require 'functions.php';
session_start();
if (empty($_SESSION['status'])) {
    echo "
        <script>
            alert('Login dulu coy!');
            window.location.href = 'index.php';
        </script>
    ";
}
$id = $_GET['id'];
if ($call->delete($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            window.location.href = 'beranda.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
        </script>
    ";
}



?>