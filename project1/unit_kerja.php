<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM unit_kerja";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Unit Kerja</h3>
        <a href="unit_create.php" class="btn btn-primary">Tambah</a>

    </div>
    <hr>
    <table class="table mt-4">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach($pasiens as $pasien): 
        ?>
            <tr>
                <td><?= $pasien["id"]?></td>
                <td><?= $pasien["nama"]?></td>
                <td>
                <a class="btn btn-primary" href="unit_edit.php?id=<?= $pasien["id"]?>">Edit</a>
                <a class="btn btn-danger" href="unit_delete.php?id=<?= $pasien["id"]?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<?php
include_once("bottom.php");
?>