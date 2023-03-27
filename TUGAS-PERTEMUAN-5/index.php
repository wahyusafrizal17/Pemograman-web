<?php

$data1 = [
    ['nama' => 'Wahyu Safrizal', 'nim' => 'D112121056'],
    ['nama' => 'Anna Yulia Apriyani', 'nim' => 'D112121058'],
    ['nama' => 'Nuris Akbar', 'nim' => 'D112121057'],
];
$data2 = [
    ['nama' => 'Wahyu Safrizal', 'nim' => 'D112121056'],
    ['nama' => 'Anna Yulia Apriyani', 'nim' => 'D112121058'],
    ['nama' => 'Nuris Akbar', 'nim' => 'D112121057'],
];

$namadec = array_column($data1, 'nama');
array_multisort($namadec, SORT_DESC, $data1);

$nimdec = array_column($data2, 'nim');
array_multisort($nimdec, SORT_DESC, $data2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa Filter BY Nama DESC</h3>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data1 as $row): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Daftar Mahasiswa Filter BY NIM DESC</h3>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data2 as $row): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>