<?php

global $koneksi;
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'corona';

$koneksi = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());

?>  