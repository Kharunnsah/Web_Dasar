<?php
        include 'koneksi.php';
        $id = $_GET["id"];
        $query = $koneksi->query("DELETE FROM tamu WHERE id ='$id'");
        
        if($query){
            header ("location: index.php");
        }else{
            print "Gagal menghapus data";
        }
    ?>
