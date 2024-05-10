<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM periksa";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Periksa</h3>
        <a href="periksa_create.php" class="btn btn-primary">Tambah</a>

    </div>
    <hr>
    <table class="table mt-4">
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Pasien ID</th>
            <th>Dokter ID</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach($pasiens as $pasien): 
        ?>
            <tr>
                <td><?= $pasien["id"]?></td>
                <td><?= $pasien["tanggal"]?></td>
                <td><?= $pasien["berat"]?></td>
                <td><?= $pasien["tinggi"]?></td>
                <td><?= $pasien["tensi"]?></td>
                <td><?= $pasien["keterangan"]?></td>
                <td><?= $pasien["pasien_id"]?></td>
                <td><?= $pasien["dokter_id"]?></td>
                <td>
                <a class="btn btn-primary" href="periksa_edit.php?id=<?= $pasien["id"]?>">Edit</a>
                <a class="btn btn-danger" href="periksa_delete.php?id=<?= $pasien["id"]?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<?php
include_once("bottom.php");
?>