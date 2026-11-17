<?php // config/database.php 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$db   = 'aplikasi_penjualan'; 
// Inisialisasi koneksi dengan MySQLi secara Object Oriented $koneksi = new mysqli($host, $user, $pass, $db);

// Koneksi database
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}