<?php
    $host = "localhost";
    $username = "admin";
    $pwd = "admin123";
    $database = "jualbeli";
    $koneksi = mysqli_connect($host,$username,$pwd,$database);
    if (!$koneksi) {
        die("Koneksi gagal: ".mysqli_connect_error());
    }
?>