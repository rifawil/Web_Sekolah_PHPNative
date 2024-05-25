<?php
    include '../config/Koneksi.php';
    $sql = "DELETE FROM berita WHERE id_berita='". $_GET['ID'] . "'";
    $result = $conn->query($sql);
    if($result)
    {
        echo "<script>location.replace('master_berita.php')</script>";
    }
    else
    {
        echo "Gagal Menghapus Data.";
    }
?>