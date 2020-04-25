<?php 
include 'koneksi.php';
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];

mysqli_query($koneksi, "INSERT INTO data VALUES('','$positif','$dirawat','$sembuh','$meninggal')");

header("location:CRUD.php?pesan=input");
?>