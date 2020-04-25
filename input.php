<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantaun Covid19</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Pemantaun Covid19 wilayah DKI Jakarta</h1>
		<h2>Pert 18 April 2020 23:38:16 (Waktu dan Jam Sekarang)<h2>
		<h3>Faris Setiawan</h3>
		<h4>171011402461</h4>
	</div>
	
	<br/>

	<button size="10"><a href="CRUD.php" target="kanan"style="text-decoration: none;color: #778899"><font face="monospace">Lihat Semua Data</a></li></button>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
			<td><label for="wilayah">Nama Wilayah </label>
            <td><select name="wilayah">
                <option>DKI Jakarta</option>
                <option>Jawa Barat</option>
                <option>Banten</option>
                <option>Jawa Tengah</option>
            </select></td>
			</tr>
			<tr>
				<td>Jumlah Positif</td>
				<td><input type="text" name="positif"></td>					
			</tr>	
			<tr>
				<td>Jumlah Dirawat</td>
				<td><input type="text" name="dirawat"></td>					
			</tr>	
			<tr>
				<td>Jumlah Sembuh</td>
				<td><input type="text" name="sembuh"></td>					
			</tr>
			<tr>
				<td>Jumlah Meninggal</td>
				<td><input type="text" name="meninggal"></td>					
			</tr>
			<tr>
				<td>Nama Operator</td>
				<td><input type="text" name="operator"></td>					
			</tr>
			<tr>
				<td>Nim Mahasiswa</td>
				<td><input type="text" name="nim"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>