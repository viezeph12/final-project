<?php
include 'koneksi.php';

// ambil data dari form
$Nama_lama = $_POST['Nama_lama']; // kode sebelum diubah
$Nama = $_POST['Nama'];
$Email= $_POST ['Email'];
$NoHP= $_POST ['NoHP'];
$Event= $_POST ['Event'];
$Style = isset($_POST['Style']) ? implode(", ", $_POST['Style']) : ""; 
$Brand= $_POST ['Brand'];

// update data di database
mysqli_query($koneksi, "UPDATE input 
                        SET Nama='$Nama', 
                            Email='$Email', 
                            NoHP='$NoHP', 
                            Event='$Event', 
                            Style='$Style',
                            Brand= '$Brand'
                        WHERE Nama='$Nama_lama'");

// balik ke halaman utama
header("location:input.php");
?>
