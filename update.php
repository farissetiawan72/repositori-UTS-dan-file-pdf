<?php 

include 'koneksi.php';
$id = $_POST['id'];
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];

mysqli_query($koneksi, "UPDATE data SET positif='$positif', dirawat='$dirawat', sembuh='$sembuh', meninggal='$meninggal' WHERE id='$id'");

header("location:CRUD.php?pesan=update");
?>