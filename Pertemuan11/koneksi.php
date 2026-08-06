<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_bukutamu";

$koneksi = new mysqli($server, $user, $password, $database);

if($koneksi->connect_error){
    echo "Koneksi gagal". $koneksi->connect_error;
}



?>