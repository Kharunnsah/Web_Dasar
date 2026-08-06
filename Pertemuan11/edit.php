<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku Tamu</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h1>Edit Buku Tamu</h1>
    <a href="index.php" class ="btn btn-primary">Data Tamu</a>
    <?php
        include 'koneksi.php';
        $id = $_GET["data"];
        $query = $koneksi->query("SELECT * FROM tamu WHERE id ='$id'");
        $row = $query->fetch_assoc();
    ?>
    <form action="proses.php" method="POST">
        <input type="hidden" name="id" value ="<?= $row['id'] ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama"  name="nama" value= "<?= $row['nama']?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value= "<?=$row['email']?>" required>
    </div>

    <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" id="komentar" name = "komentar"rows="3"> <?=$row['komentar']?>   
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary" name = "update">Submit</button>
    <button type="reset" class="btn btn-success">Reset</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 