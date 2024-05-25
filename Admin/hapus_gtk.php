<?php
    include '../config/Koneksi.php';
    $sql = "DELETE FROM gtk WHERE id_gtk='". $_GET['ID'] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        echo "<script>location.replace('master_gtk.php')</script>";
    }
    else
    {
        echo "Gagal Menghapus Data.";
    }
?>