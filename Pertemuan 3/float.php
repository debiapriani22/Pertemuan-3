<?php

$nilaiMatematika = 5.1;
$nilaiIpa = 6.7;
$nilaiBahasaIndonesia = 9.3;

#hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia) / 3;

#tampilkan data

echo "Matematika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIpa} <br>";
echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : {$rataRata} <br>";

#lihat tipe data dari variabel $rataRata
var_dump($rataRata);