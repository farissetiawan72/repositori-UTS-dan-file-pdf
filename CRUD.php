<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantaun Covid19</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Pemantaun Covid19 wilayah DKI Jakarta</h1>
		<h2>Pert 18 April 2020 23:38:16 (Waktu dan Jam Sekarang)<h2>
		<h3>Faris Setiawan</h3>
		<h4>171011402461</h4>
		
	</div>	
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>id</th>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM data")or die(mysqli_error($koneksi));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['positif']; ?></td>
			<td><?php echo $data['dirawat']; ?></td>
			<td><?php echo $data['sembuh']; ?></td>
			<td><?php echo $data['meninggal']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>