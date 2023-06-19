<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_mk = $_GET['kode_mk'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mata_kuliah where kode_mk='$kode_mk'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>