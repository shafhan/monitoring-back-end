<?php
include('tugas-1.2(function).php');
try {
    $id = $_GET['id'];
    $call->delete($id);
    echo "
        <script>
            alert('Data berhasil dihapus!');
        </script>
    ";
    header('Location: tugas-1.2(output data).php');
} catch (PDOException $e) {
    echo "Can't delete data : " . $e->getMessage() . $e->getLine();
}



?>