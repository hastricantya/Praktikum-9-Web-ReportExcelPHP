<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";
// perintah php untuk mengakses database
$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi) {
	die ("Koneksi Gagal:".mysqli_connect_error());
}
?>