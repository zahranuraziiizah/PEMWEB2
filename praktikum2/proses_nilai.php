<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

// hitung nilai total (30% uts + 35%uas + 35% tugas)
$nilai_total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas) ;

if($nilai_total > 55){
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

// tentukan Grade nilai dari hasil ujian
if ($nilai_total >= 85) {
    $grade = "A";
} elseif ($nilai_total >= 70) {
    $grade = "B";
} elseif ($nilai_total >= 56) {
    $grade = "C";
} elseif ($nilai_total >= 36) {
    $grade = "D";
} elseif ($nilai_total >= 0) {
    $grade = "E";
} else {
    $grade = "I";
}

// tentukan predikat dari grade dari nilai ujian siswa
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case 'B':
        $predikat = "Memuaskan";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "Tidak Ada";
        break;
}


// tampilkan hasil form
echo "Nama Lengkap : $nama" ;
echo "<br>Mata Kuliah : $matkul" ;
echo "<br>Nilai UTS : $uts" ;
echo "<br>Nilai UAS : $uas" ;
echo "<br>Nilai Tugas Praktikum : $tugas" ;
echo "<br>Nilai Total : $nilai_total" ;
echo "<br>Grade : $grade";
echo "<br>Predikat : $predikat";
echo "<br>Status : $status" ;