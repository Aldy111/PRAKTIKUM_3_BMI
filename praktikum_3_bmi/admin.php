<?php
    require_once 'class.php';

    $nama = $_POST['nama'];
    $berat = $_POST['bb'];
    $tinggi = $_POST['tb'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jk'];

    $peserta = new Bmi_pasien($nama, $umur, $jenis_kelamin, $berat, $tinggi);
    $berat_massa = $peserta->getBmi();
    $berat_d = number_format($peserta->getBerat(), 1);


    $peserta1 = ['nama' => 'Ahmad Fadil', 'umur' => 18, 'jk' => 'Pria', 'bb' => 60.2, 'tb' => 155, 'bmi' => 40.15, 'status' => 'Kegemukan/Obesitas'];
    $peserta2 = ['nama' => 'Sri Safitri', 'umur' => 23, 'jk' => 'Wanita', 'bb' => 30.3, 'tb' => 165, 'bmi' => 26.5, 'status' => 'Normal/Ideal'];
    $peserta3 = ['nama' => $peserta->getNama(), 'umur' => $peserta->getUmur(), 'jk' => $peserta->getJk(), 'bb' => $berat_d, 'tb' => $peserta->getTinggi(), 'bmi' => $peserta->getBmi(), 'status' => $peserta->getStatus($berat_massa)];

    $array_data = [$peserta1, $peserta2, $peserta3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi</title>
    <link rel="stylesheet" href="" crossorigin="anonymous">

</head>
<body>
    <h3 class='my-3 ml-2'>Data BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Gender</th>
                <th>Berat(kg)</th>
                <th>Tinggi(cm)</th>
                <th>BMI</th>
                <th>Hasil</th>

            </tr>
        </thead>
        <tbody>
            <?php 
                $nomor = 1;
                foreach ($array_data as $data) { 
                
                echo '<tr>';
                echo '<td>'. $nomor .'</td>';
                echo '<td>'. $data['nama'] .'</td>';
                echo '<td>'. $data['umur'] .'</td>';
                echo '<td>'. $data['jk'] .'</td>';
                echo '<td>'. $data['bb'] .'</td>';
                echo '<td>'. $data['tb'] .'</td>';
                echo '<td>'. $data['bmi'] .'</td>';
                echo '<td>'. $data['status'] .'</td>';
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>