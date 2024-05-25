<?php
    include '../config/Koneksi.php';
    $sql = "DELETE FROM mapel WHERE id_mapel='". $_GET['ID'] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        echo "<script>location.replace('master_mapel.php')</script>";
    }
    else
    {
        echo "Gagal Menghapus Data.";
    }
?>