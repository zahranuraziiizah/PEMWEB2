<?php
require_once('class_persegipanjang.php');

// instansiasi object lingkarang
$PersegiPanjang1 = new PersegiPanjang(10, 5);
$PersegiPanjang2 = new PersegiPanjang(24, 8);

//panggil method
echo "<br> Luas Persegi Panjang: " . $PersegiPanjang1->getLuas();
echo "<br> Luas Persegi Panjang: " . $PersegiPanjang2->getLuas();

echo "<br> Keliling Persegi Panjang: " . $PersegiPanjang1->getKeliling();
echo "<br> Keliling Persegi Panjang: " . $PersegiPanjang2->getKeliling();