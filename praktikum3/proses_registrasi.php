<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills']??null;
$domisili = $_POST['domisili'];
$email = $_POST['email'];

if ($skills == null) {
    $skills = [];
}

$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];

$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
}

function skor_skill($skor_skill){
    if ($skor_skill >= 0 && $skor_skill <= 40){
        return "Kurang";
    }
    elseif($skor_skill >= 41 && $skor_skill <= 60){
        return "Cukup";
    }
    elseif($skor_skill >= 61 && $skor_skill <= 100){
        return "Baik";
    }
    elseif($skor_skill >= 101 && $skor_skill <= 150){
        return "Sangat Baik";
    }
    else {
        return "Tidak memadai";
    }
};

echo "NIM: $nim";
echo "</br> Nama Lengkap: $nama";
echo "</br>Jenis Kelamin: $jk";
echo "</br>Program Studi: $prodi";
echo "</br>Skill: " . join(',', $skills);
echo "</br>Tempat Domisili: $domisili";
echo "</br>Email: $email";
echo "</br>Skor: $skor_skill";
echo "</br>Kategori Skill:" . skor_skill($skor_skill);