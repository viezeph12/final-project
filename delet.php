<?php
include 'koneksi.php';

$Nama=$_GET ['id'];

mysqli_query($koneksi, "delete from input where Nama= '$Nama'");

header("location:landing.html");

?>