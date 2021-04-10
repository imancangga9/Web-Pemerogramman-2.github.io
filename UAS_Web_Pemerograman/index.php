<?php include 'koneksi.php'; ?>
<?php include 'proses1.php'; ?>
<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" type="text/css">
	<title><font color="red">Data Pembayaran Zakat</font></title>
</head>
<style>
	p{
		font-size: 20px;
		color:  white;
	}
	body { 
			font-family: sans-serif; 
			font-size:12px; 
			background: white;
		}
		#container { 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
			background: black;
			color: white;
		}
	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { 
		border:1px solid red; 
		background:#ffc0c0; 
		padding:5px; }	
	.btn-action .btn{
		border-radius: 5px;
		color: afc3a8;
		margin: 20px;
		font-size: 18px;
        box-shadow:5 5px 5px 5 rgba(0,0,0,.24);
            
	}
	a {
            font-size: 18px;
            font-weight: 400;
            text-decoration: none;
            color: black;
        }
	
</style>
<body class="container" style="text-align: center;">

</div>
	<div class="container" style="margin-top: 20px;">
	<p>Data Pembayaran Zakat</p>
	<p> Per <?php 
        echo date('d-F-Y')." ";
        echo date('H:i:s');?></p>	
	<div class="btn-action">
		
	</div>		
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Zakat</th>
				<th scope="col">Nominal</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Nomor Hp</th>
				<th scope="col">Email</th>
				<th scope="col">Bank</th>
				<th scope="col">Rekening</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		
		<?php 
		
		// perintah query untuk menampilkan / mengambil data dari database
		$query = mysqli_query($koneksi, "SELECT * from tbl_zakat  ORDER BY id desc");
	
		// while digunakan untuk id / no yang menggunakan tipe data int auto increment
		$no = 0;
		while ($data = mysqli_fetch_array($query)) {
			$no++
		 ?>
		 <tbody>			  	
		 	<tr>
		 		<!-- perintah untuk menampilkan data yang sudah diambil dari database ke browser html -->
		 		<th scope="row"><?= $no; ?></th>
		 		<td><?= $data['zakat'];?></td>
		 		<td><?= $data['nominal'];?></td>
		 		<td><?= $data['nama'];?></td>
		 		<td><?= $data['hp'];?></td>
				 <td><?= $data['email'];?></td>
				 <td><?= $data['bank'];?></td>
				 <td><?= $data['rek'];?></td>
		 		<td>
				 	<a href="export.php?id=<?= $data['id']?>" class="btn btn-primary" >Cetak</a>
					<a href="input.php?id=<?= $data['id']?>" class="btn btn-primary">Input</a>
		 			<a href="edit.php?id=<?= $data['id']?>" class="btn btn-primary">Edit</a>
		 			<a href="delete.php?id=<?= $data['id']?>" class="btn btn-danger" >Delete</a>
		 			
		 		</td>
		 	</tr>
		 </tbody>
		<?php } ?>
	</table>
	<a href="logout.php" class="btn">Logout</a>
	
</div>
</body>
</html>