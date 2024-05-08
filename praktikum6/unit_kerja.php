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
    </div>
    <hr>
    <table class="table mt-4">
        <tr>
            <th>ID</th>
            <th>Nama</th>
        </tr>
        <?php
        foreach($pasiens as $pasien): 
        ?>
            <tr>
                <td><?= $pasien["id"]?></td>
                <td><?= $pasien["nama"]?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<?php
include_once("bottom.php");
?>