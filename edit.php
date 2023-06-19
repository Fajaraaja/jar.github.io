<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
 
	<h2>EDIT DATA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$kode_mk = $_GET['kode_mk'];
	$data = mysqli_query($koneksi,"select * from mata_kuliah where kode_mk='$kode_mk'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE MATA KULIAH</td>
					<td>
						<input type="hidden" name="kode_mk" value="<?php echo $d['kode_mk']; ?>">
						<input type="number" name="kode_mk" value="<?php echo $d['kode_mk']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MATA KULIAH</td>
					<td><input type="text" name="nama_mk" value="<?php echo $d['nama_mk']; ?>"></td>
				</tr>
				<tr>
					<td>SEMESTER</td>
					<td><input type="number" name="semester" value="<?php echo $d['semester']; ?>"></td>
				</tr>
                <tr>
					<td>JUMLAH_SKS</td>
					<td><input type="number" name="jumlah_sks" value="<?php echo $d['jumlah_sks']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>