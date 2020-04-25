<!DOCTYPE html>
<html>
<head>
	<title><center>Data pemantaun Covid19</center></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Pemantaun Covid19 wilayah DKI Jakarta</h1>
		<h2>Pert 18 April 2020 23:38:16 (Waktu dan Jam Sekarang)<h2>
		<h3>Faris Setiawan</h3>
		<h4>171011402461</h4>
	</div>
	
	<br/>
	
	<a href="CRUD.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'")or die(mysqli_error($koneksi));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Jumlah Positif</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="positif" value="<?php echo $data['positif'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Jumlah Dirawat</td>
				<td><input type="text" name="dirawat" value="<?php echo $data['dirawat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Sembuh</td>
				<td><input type="text" name="sembuh" value="<?php echo $data['sembuh'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jumlah Meninggal</td>
				<td><input type="text" name="meninggal" value="<?php echo $data['meninggal'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>