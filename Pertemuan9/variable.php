<?php
//tuliskan semua block kode php di dalam tag ini

//deklarasi variabel 
$nama_mahasiswa = "Khairunnisah";
$umur = 20;
$ipk = 3.85;

//menampilkan isi variabel ke layar
// echo 'Halo, Nama Saya'. $nama_mahasiswa .' dan sayar berumur'. $umur.'tahun'.
// 'IPK semester sebelumnya adalah'.$ipk;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border ='1' width = "25%">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>IPK</th>
        </tr>
        <tr>
            <td><?= $nama_mahasiswa ?></td>
            <td><?= $umur ?> tahun</td>
            <td><?php echo $ipk ?></td>
        </tr>
    </table>
</body>
</html>

