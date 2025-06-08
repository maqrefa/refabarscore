<?php
$host = "192.168.1.2";
$user = "refabar";
$pass = "refabar123";
$db = "refabarscore";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
