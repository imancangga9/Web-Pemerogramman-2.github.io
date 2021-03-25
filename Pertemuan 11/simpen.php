<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simpan Data</title>
    </head>
    <body>
        <?php 

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alm = $_POST['alamat']; 
        $kota = $_POST['kota'];
        $pesan = $_POST['pesan'];

        $query = mysqli_query($db, "INSERT INTO tamu values('', '$nama','$email','$alm','$kota','$pesan')") or die (mysqli_error($koneksi,$query));

        if ($query) {
            echo "<font color=red size=5>Buku Tamu Berhasil diisi</font>";

        }

        ?>

        <br>
        <a href="tampilkan.php"><h3>Lihat Buku Tamu</h3></a>	 
    </body>
</html>