<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['nama'];
$email = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

// buat query insert
$query = "UPDATE pasien SET nama='$nama', kode='$kode', email='$email', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', gender='$gender', alamat='$alamat', kelurahan_id='$kelurahan_id' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}