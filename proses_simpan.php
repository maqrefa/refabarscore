<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$tim_pilihan = $_POST['tim_pilihan'];
$jumlah_bet = $_POST['jumlah_bet'];
$metode = $_POST['metode_pembayaran'];

$sql = "INSERT INTO bet_user (nama, hp, email, tim_pilihan, jumlah_bet, metode_pembayaran)
        VALUES ('$nama', '$hp', '$email', '$tim_pilihan', '$jumlah_bet', '$metode')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: pages/data_bet.php");
    exit();
} else {
    echo "Gagal menyimpan data: " . $koneksi->error;
}
?>
