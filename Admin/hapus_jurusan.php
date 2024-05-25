<?php
    include '../config/Koneksi.php';
    $sql = "DELETE FROM jurusan WHERE id_jurusan='". $_GET['IDJUR'] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        echo "<script>location.replace('master_jurusan.php')</script>";
    }
    else
    {
        echo "Gagal Menghapus Data.";
    }
?>