<?php include 'koneksi.php'; ?>
<?php include 'validasi.php'; ?>
<html>
<head>
  <title>Laporan Pembayaran Zakat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Zakat</h2>
			<h4>Laporan Pembayaran Zakat</h4>
				<div class="data-tables datatable-dark">

                <table id="export"  class="table table-striped table-hover table-sm table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">zakat</th>
                                <th scope="col">nominal</th>
                                <th scope="col">nama</th>
                                <th scope="col">hp</th>
                                <th scope="col">email</th>
                                <th scope="col">bank</th>
                                <th scope="col">rekening</th>
                                
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
                            
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            
			</div>
</div>
	
<script>
$(document).ready(function() {
    $('#export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>