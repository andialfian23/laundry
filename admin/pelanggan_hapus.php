<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM pelanggan 
                        where pelanggan_id='$id'       ");
header("location:pelanggan.php");

?>