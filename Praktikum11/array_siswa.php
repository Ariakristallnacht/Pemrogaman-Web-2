<?php
$mhs1 = ['id' => 1, 'NIM' => 110222076, 'UTS' => 90, 'UAS' => 95, 'TUGAS' => 85];
$mhs2 = ['id' => 2, 'NIM' => 110222086, 'UTS' => 80, 'UAS' => 85, 'TUGAS' => 90];
$mhs3 = ['id' => 3, 'NIM' => 110222096, 'UTS' => 85, 'UAS' => 90, 'TUGAS' => 80];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h2>Data Mahasiswa STT NF</h2>
    <table class="table table-striped">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>Nilai Akhir</th>
        </tr>
        <?php foreach($ar_nilai as $nilai){
            $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS']) / 3;

            ?>
        <tr>
            <td><?= $nilai['id'];?></td>
            <td><?= $nilai['NIM'];?></td>
            <td><?= $nilai['UTS'];?></td>
            <td><?= $nilai['UAS'];?></td>
            <td><?= $nilai['TUGAS'];?></td>
            <td><?= number_format($nilai_akhir, 1, '.', ','); ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
  </body>
</html>
