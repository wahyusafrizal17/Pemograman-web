<?php

$nama = 'Wahyu Safrizal';
$jeniskelamin = 'Laki - Laki';
$umur = 20;
$berat = 55;
$tinggi = 169;
$status = false;

$nilai = 96;

if($nilai <= 100 && $nilai >= 85){
    $nilai = 'A';
    $desc = 'Istimewa';
}elseif($nilai <= 84 && $nilai >= 84){
    $nilai = 'AB';
    $desc = 'Lebih dari baik';
}elseif($nilai <= 79 && $nilai >= 75){
    $nilai = 'B';
    $desc = 'Baik';
}elseif($nilai <= 74 && $nilai >= 70){
    $nilai = 'BC';
    $desc = 'Lebih dari cukup';
}elseif($nilai <= 69 && $nilai >= 60){
    $nilai = 'C';
    $desc = 'Cukup';
}elseif($nilai <= 59 && $nilai >= 50){
    $nilai = 'CD';
    $desc = 'Kurang dari cukup';
}elseif($nilai <= 49 && $nilai >= 40){
    $nilai = 'D';
    $desc = 'Kurang';
}elseif($nilai <= 39){
    $nilai = 'E';
    $desc = 'Gagal';
}else{
    $nilai = 'Nilai tidak terdefinisi';
    $desc = '-';
}

?>

<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jeniskelamin ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $umur ?></td>
        </tr>
        <tr>
            <td>Berat</td>
            <td>:</td>
            <td><?= $berat ?></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><?= $tinggi ?></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <?php if($status): ?>
                <td>Menikah</td>
            <?php else: ?>
                <td>Belum Menikah</td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>:</td>
            <td><?= $nilai ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $desc ?></td>
        </tr>
    </table>
</body>
</html>