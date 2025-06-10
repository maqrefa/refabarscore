<?php
$host = "192.168.26.56";
$user = "root";
$pass = "123456";
$db = "refabarscore";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
