<?php

// ini sebuah komentar

// echo "Hello World <br>";
// print_r("Nama saya Aria <br>");
// var_dump("Kuliah di STT Terpadu Nurul Fikri");

// Membuat variabel user
// $nama = "Aria Kristallnacht";
// $umur = 20;
// $berat = 45.2;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur tahun <br>";
// echo "Berat badan saya $berat kg <br>";

// Membuat variable sistem
// echo "Dokumentasi root" . $_SERVER["DOKUMEN_ROOT"];
// echo "Nama File" . $_SERVER['PHP_SELF'];

// Membuat variabel konstanta
// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo " Luas lingkaran dengan jari-jari = $jari = $luas <br>";
// echo " Keliling lingkaran adalah $keliling";

// Membuat Array
$programs = ["php", "javascript", "HTML", "CSS"];
echo  $programs[0];
echo count($programs);
$programs[] = "Mysql";
echo count($programs);

unset($programs[0]);
echo "<br>" . $programs[0];

echo "<ol>"
foreach($program as $program){
    echo "<li> $program </li>";
}
echo "</ol>";


?>