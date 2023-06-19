<!DOCTYPE html>
<html>
<head>
	<title>MENAMBAH DATA</title>
</head>
<body>
 
	<h2>MENAMBAH DATA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Mata Kuliah</td>
				<td><input type="number" name="kode_mk"></td>
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td><input type="text" name="nama_mk"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="number" name="semester"></td>
			</tr>
            <tr>
				<td>Jumlah SKS</td>
				<td><input type="number" name="jumlah_sks"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>