<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Data Buku Tamu</h1>
<table class ="table table-bordered table-hover">
    <tr class ="table-primary">
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komentar</th>
        <th>Aksi</th>
    </tr>
    <?php
    include("koneksi.php");
    $query = $koneksi->query("SELECT * FROM tamu");
    $no = 1;
    while ($row = $query->fetch_assoc()){ ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['komentar'];?></td>
            <td>
                <a href="hapus.php?id=<?=$row['id'] ?>" class = "btn btn-danger  btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                <a href="edit.php?data=<?=$row['id'] ?>" class = "btn btn-warning btn-sm">Edit</a>
            </td>
            
            
        </tr>
    <?php }
    ?>

</table>
        <a  class="btn btn-primary" href= "create.php">Input Buku Tamu</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 