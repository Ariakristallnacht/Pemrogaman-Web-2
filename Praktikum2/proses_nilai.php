<?php
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$uts = $_GET['UTS'];
$uas = $_GET['UAS'];
$tugas = $_GET['TUGAS'];
$total_nilai = ($tugas + $uts + $uas) / 3;

if ($total_nilai >= 75) {
    $keterangan = "LULUS"; 
}else {
    $keterangan = "TIDAK LULUS";
}

?>