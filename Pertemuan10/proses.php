<?php
include ("koneksi.php");
if (isset($_POST['insert'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $date_created = date('Y-m-d H:i:s');
    $sql = "INSERT INTO tamu(nama,email,date_created,komentar) 
            VALUES('$nama','$email','$date_created','$komentar')";

    $query = $koneksi->query ($sql);


if ($query){
    echo "Terimakasih telah mengisi buku tamu<br>";
    echo "<a href=index.php>Tampilkan list tamu</a>";
}
else {
echo "Proses input buku tamu,Gagal..";
}
}
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $id = $_POST['id'];
    
    $sql = "UPDATE tamu SET nama ='$nama',email ='$email',komentar ='$komentar' WHERE 
    id='$id'";

    $query = $koneksi->query ($sql);


if ($query){
    echo "Terimakasih telah mengubah buku tamu<br>";
    echo "<a href=index.php>Tampilkan list tamu</a>";
}
else {
echo "Proses input buku tamu,Gagal..";
}
}

?>

