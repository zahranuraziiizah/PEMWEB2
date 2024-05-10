<?php
include_once('koneksi.php');

$id = $_GET["id"];


$query = "DELETE FROM unit_kerja WHERE id='$id'";



if ($dbh->exec($query)) {
    header("Location: unit_kerja.php");
} else{
    echo"Gagal menghapus data";
}