<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$hp     = $_POST['hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi," INSERT INTO `pelanggan` (`nama`, `hp`, `alamat`) 
                        VALUES ('$nama', '$hp', '$alamat')   ");
    
header("location:pelanggan.php");

?>