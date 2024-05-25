<?php
    $server = "localhost"; // nama server
    $user = "root"; // username
    $password = ""; // password database
    $db = "db_websekolah"; // nama database

    // membuat koneksi
    $conn = new mysqli($server, $user, $password, $db);
    if($conn->connect_error)
    {
        die("Error : " . $conn->connect_error);
    }
    ?>