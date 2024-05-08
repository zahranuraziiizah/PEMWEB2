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
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<?php
include_once("bottom.php");
?>