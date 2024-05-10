<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");
$unit_kerja_id = $dbh->query('SELECT * FROM unit_kerja');

$id = $_GET['id'];
$pasien = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();
?>
<div class="container-fluid px-4">
  <h1 class="mt-4">Edit Paramedik</h1>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <form action="paramedik_update.php" method="POST">
    <input type="hidden" name="id" value="<?= $pasien["id"] ?>">

    <div class="form-group row">
      <label for="did" class="col-4 col-form-label">ID</label>
      <div class="col-8">
        <input id="did" name="did" type="text" class="form-control" required="required" value="<?= $pasien["id"] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">nama</label>
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $pasien["nama"] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Jenis Kelamin</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required" <?= $pasien["gender"] == 'L' ? 'checked' : '' ?>>
          <label for="gender_0" class="custom-control-label">Laki-Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required" <?= $pasien["gender"] == 'P' ? 'checked' : '' ?>>
          <label for="gender_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
      <div class="col-8">
        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $pasien["tmp_lahir"] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
      <div class="col-8">
        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $pasien["tgl_lahir"] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Kategori</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="kategori" id="kategori_0" type="radio" class="custom-control-input" value="S1" required="required" <?= $pasien["kategori"] == 'S1' ? 'checked' : '' ?>>
          <label for="kategori_0" class="custom-control-label">S1</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="kategori" id="kategori_1" type="radio" class="custom-control-input" value="S2" required="required" <?= $pasien["kategori"] == 'S2' ? 'checked' : '' ?>>
          <label for="kategori_1" class="custom-control-label">S2</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="kategori" id="kategori_2" type="radio" class="custom-control-input" value="S3" required="required" <?= $pasien["kategori"] == 'S3' ? 'checked' : '' ?>>
          <label for="kategori_2" class="custom-control-label">S3</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="telpon" class="col-4 col-form-label">telpon</label>
      <div class="col-8">
        <input id="telpon" name="telpon" type="text" class="form-control" required="required" value="<?= $pasien["telpon"] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="col-4 col-form-label">Alamat</label>
      <div class="col-8">
        <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"><?= $pasien["alamat"] ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="unit_kerja_id" class="col-4 col-form-label">Kelurahan</label>
      <div class="col-8">
        <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select" required="required">
          <option value="">-- Pilih Unit Kerja --</option>
          <?php foreach ($unit_kerja_id as $kel) : ?>
            <option <?= $pasien["unit_kerja_id" ] == $kel['id'] ? 'selected' : '' ?> value="<?= $kel['id'] ?>"><?= $kel['nama'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php
include_once("bottom.php");
?>