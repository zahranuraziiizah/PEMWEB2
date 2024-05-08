<?php
include_once('koneksi.php');

// tangkap data dari url
$id = $_GET['id'];

// buat query insert
$query = "DELETE FROM pasien WHERE id='$id'";

// eksekusi query
if ($dbh->exec($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menghapus data";
}