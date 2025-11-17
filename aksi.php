<?php
//konek database
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

$Brand= $_POST ['Brand'];

mysqli_query ($koneksi, "INSERT INTO input (Nama, Email, NoHP, Event, Style, Brand) values ('$Nama','$Email', '$NoHP','$Event','$Style','$Brand')");

header("location:input.php");

?>