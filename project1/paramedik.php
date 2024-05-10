<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM paramedik";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Paramedik</h3>
        <a href="paramedik_create.php" class="btn btn-primary">Tambah</a>

    </div>
    <hr>
    <table class="table mt-4">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
            <th>Kategori</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Unit Kerja</th>
            <th>Opsi</th>
            <th></th>
        </tr>
        <?php
        foreach($pasiens as $pasien): 
        ?>
            <tr>
                <td><?= $pasien["id"]?></td>
                <td><?= $pasien["nama"]?></td>
                <td><?= $pasien["gender"]?></td>
                <td><?= $pasien["tmp_lahir"]?></td>
                <td><?= $pasien["tgl_lahir"]?></td>
                <td><?= $pasien["kategori"]?></td>
                <td><?= $pasien["telpon"]?></td>
                <td><?= $pasien["alamat"]?></td>
                <td><?= $pasien["unit_kerja_id"]?></td>
                <td>
                <a class="btn btn-primary" href="paramedik_edit.php?id=<?= $pasien["id"]?>">Edit</a>

                </td>
                
                <td>
                <a class="btn btn-danger" href="paramedik_delete.php?id=<?= $pasien["id"]?>">Hapus</a>

                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<?php
include_once("bottom.php");
?>