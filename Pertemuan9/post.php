<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<h1>Form Registrasi :</h1>

<form method="post" action="">
    <table>
        <tr>
            <td>No. BP</td>
            <td><input type="text" name="nobp"></td>
        </tr>

        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['submit'])){

    $nobp = $_POST['nobp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    echo "<h3>Hasil Input POST</h3>";
    echo "No BP : $nobp <br>";
    echo "Nama Mahasiswa : $nama <br>";
    echo "Email : $email <br>";
}
?>

</body>
</html>