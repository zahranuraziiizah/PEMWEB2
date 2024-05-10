<?php
include_once('koneksi.php');

$id = $_POST["id"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$tmp_lahir = $_POST["tmp_lahir"];
$tgl_lahir = $_POST["tgl_lahir"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];
$unit_kerja_id = $_POST["unit_kerja_id"];

$query = "INSERT INTO paramedik (id, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES ('$id','$nama', '$gender','$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat', '$unit_kerja_id')";




if ($dbh->query($query)) {
    header("Location: paramedik.php");
} else{
    echo"Gagal menyimpan data";
}