<?php
include_once('koneksi.php');

$id = $_GET["id"];


$query = "DELETE FROM paramedik WHERE id='$id'";



if ($dbh->exec($query)) {
    header("Location: paramedik.php");
} else{
    echo"Gagal menghapus data";
}