<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<?php

if(!empty($_POST)){
    $suhu = $_POST['suhu'];
    $konversi = $_POST['konversi'];

    if($konversi == 'Reamur'){
        $hasil = floatval($suhu * (4/5));
    }elseif($konversi == 'Farenheit'){
        $hasil = floatval($suhu * (9/5) + 32);
    }else{
        $hasil = floatval($suhu + 273);
    }
}

?>
<body>
    <h4>Konversi Satuan Suhu</h4>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Suhu</td>
                <td>
                    <input type="text" name="suhu" required>
                </td>
            </tr>
            <tr>
                <td>Konversi</td>
                <td>
                    <select name="konversi" required>
                        <!-- <option>Pilih</option> -->
                        <option value="Reamur">Reamur</option>
                        <option value="Farenheit">Farenheit</option>
                        <option value="Kelvin">Kelvin</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Konversi</button>
                </td>
            </tr>
        </table>
    </form>
    <br><br>
    <?php if(!empty($_POST)): ?>
        Hasil Konversi ke <?= $konversi ?> : <?= $hasil ?>
    <?php endif; ?>
</body>
</html>