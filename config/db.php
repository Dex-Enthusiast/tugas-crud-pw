<?php 
// Konfigurasi koneksi database
    $host = "localhost"; // alamat server database
    $user = "root"; // Username default xampp
    $pass = ""; // Password di kosongkan
    $db = "inventory_db"; // Nama database

    // Connect Mysql
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    // Cek Koneksi
    if (!$conn) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }
?>