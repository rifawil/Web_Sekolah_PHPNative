<?php
    include '../config/Koneksi.php';
    $sql = "DELETE FROM jabatan WHERE id_jabatan='". $_GET['IDJAB'] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        echo "<script>location.replace('master_jabatan.php')</script>";
    }
    else
    {
        echo "Gagal Menghapus Data.";
    }
?>