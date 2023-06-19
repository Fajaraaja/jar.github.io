<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into mata_kuliah values('1','$kode_mk','$nama_mk','$semester','$jumlah_sks')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>