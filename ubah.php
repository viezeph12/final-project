<?php
include 'koneksi.php';

$Nama= $_POST ['Nama'];
$Email= $_POST ['Email'];
$NoHP= $_POST ['NoHP'];
$Event= $_POST ['Event'];
if (isset($_POST['Style']) && is_array($_POST['Style'])) {
    $Style = implode(", ", $_POST['Style']);
} else {
    $Style = '';
}
$Brand=$_POST['Brand'];

mysqli_query($koneksi, "update input set Nama= '$Nama', Email='$Email', NoHP= '$NoHP', Event='$Event', Style= '$Style', Brand= '$Brand' where Nama ='$Nama'");

header ("location:input.php");

?>