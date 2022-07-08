<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uts_20014547";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Maaf Koneksi Gagal");
}
?>