<?php

include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi," UPDATE pelanggan 
                        SET nama='$nama',hp='$hp', alamat='$alamat' 
                        WHERE pelanggan_id='$id' 
                        ");
    
header("location:pelanggan.php");

?>