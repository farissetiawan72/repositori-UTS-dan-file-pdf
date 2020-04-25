<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:CRUD.php?pesan=hapus");
?>