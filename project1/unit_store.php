<?php
include_once('koneksi.php');

$id = $_POST["id"];
$nama = $_POST["nama"];


$query = "INSERT INTO unit_kerja (id, nama) VALUES ('$id', '$nama')";   




if ($dbh->query($query)) {
    header("Location: unit_kerja.php");
} else{
    echo"Gagal menyimpan data";
}