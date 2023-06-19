<!DOCTYPE html>
<html>
<head>
	<title>TABEL MATA KULIAH</title>
</head>
<body>
 
	<h2>TABEL MATA KULIAH</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NOMOR</th>
			<th>KODE MATA KULIAH</th>
			<th>NAMA MATA KULIAH</th>
			<th>SEMESTER</th>
			<th>JUMLAH SKS</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mata_kuliah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_mk']; ?></td>
				<td><?php echo $d['nama_mk']; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['jumlah_sks']; ?></td>
				<td>
					<a href="edit.php?kode_mk=<?php echo $d['kode_mk']; ?>">EDIT</a>
					<a href="hapus.php?kode_mk=<?php echo $d['kode_mk']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>