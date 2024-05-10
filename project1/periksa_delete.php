<?php
include_once('koneksi.php');

$id = $_GET["id"];


$query = "DELETE FROM periksa WHERE id='$id'";



if ($dbh->exec($query)) {
    header("Location: periksa.php");
} else{
    echo"Gagal menghapus data";
}