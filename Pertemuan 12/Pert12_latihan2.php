<?php 

	$con =	mysqli_connect("localhost","root","","lat_database");	

	if (!$con) {
		die("Gagal Terhubung dengan database".mysqli_error());
	}

	$query = mysqli_query($con,"DELETE from tbl_mhs WHERE lastName = 'Prabowo' ");
	if ($query) {
		echo "<font color=blue size=5>Data Berhasil Dihapus</font>";
	}


 ?>