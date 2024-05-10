<?php
include_once('koneksi.php');

$id = $_POST["id"];
$nama = $_POST["nama"];


$query = "UPDATE unit_kerja SET id='$id', nama='$nama' WHERE id='$id'";




if ($dbh->query($query)) {
    header("Location: unit_kerja.php");
} else{
    echo"Gagal menyimpan data";
}