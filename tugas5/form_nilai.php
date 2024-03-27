<?php
include_once 'class_nilai.php'; // menggunakan include_once untuk memastikan file hanya di-include sekali

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

    $nilaiMahasiswa = new NilaiMahasiswa($nama, $matkul, $uts, $uas, $tugas);

    // Dapatkan hasil perhitungan dari objek NilaiMahasiswa
    $nilai_total = $nilaiMahasiswa->nilai_total;
    $status = $nilaiMahasiswa->status;
    $grade = $nilaiMahasiswa->grade;
    $predikat = $nilaiMahasiswa->predikat;
}
?>

<!-- Form HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <h2 class="text-center">Form Nilai Mahasiswa</h2>
    <hr>

    <div class="container">
        <form class="mr-5 ml-5" action="" method="get">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="B. Inggris">B. Inggris</option>
                        <option value="Statistika">Statistika</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-sm-2 col-form-label">Nilai UTS</label>
                <div class="col-sm-10">
                    <input id="uts" name="uts" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-sm-2 col-form-label">Nilai UAS</label>
                <div class="col-sm-10">
                    <input id="uas" name="uas" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-sm-2 col-form-label">Nilai Tugas</label>
                <div class="col-sm-10">
                    <input id="tugas" name="tugas" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>


    <!-- Display Result -->
    <?php if (isset($nilaiMahasiswa)) : ?>
        <div class="container mt-4">
            <h3>Hasil Perhitungan:</h3>
            <p>Nama: <?php echo $nama; ?></p>
            <p>Mata Kuliah: <?php echo $matkul; ?></p>
            <p>Nilai Total: <?php echo $nilai_total; ?></p>
            <p>Status: <?php echo $status; ?></p>
            <p>Grade: <?php echo $grade; ?></p>
            <p>Predikat: <?php echo $predikat; ?></p>
        </div>
    <?php endif; ?>
</body>

</html>