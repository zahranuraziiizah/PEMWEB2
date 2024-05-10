<?php
include_once('koneksi.php');

$id = $_POST["id"];
$tanggal = $_POST["tanggal"];
$berat = $_POST["berat"];
$tinggi = $_POST["tinggi"];
$tensi = $_POST["tensi"];
$keterangan = $_POST["keterangan"];
$pasien_id = $_POST["pasien_id"];
$dokter_id = $_POST["dokter_id"];

$query = "INSERT INTO periksa (id, tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES ('$id','$tanggal', '$berat','$tinggi', '$tensi', '$keterangan', '$pasien_id', '$dokter_id')";



if ($dbh->query($query)) {
    header("Location: periksa.php");
} else{
    echo"Gagal menyimpan data";
}