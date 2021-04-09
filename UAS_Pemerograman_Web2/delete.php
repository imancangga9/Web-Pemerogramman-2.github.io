<?php  include 'validasi.php'; ?>
<?php 
	include 'koneksi.php';
	
	$idZakat = $_GET['id'];
	
	$query = mysqli_query($koneksi,"DELETE FROM tbl_zakat WHERE id='$idZakat'");
	
	header("location: index.php");

 ?>