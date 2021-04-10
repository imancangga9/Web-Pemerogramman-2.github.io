UAS PEMROGRAMAN WEB 2 MEMBUAT SISTEM LOGIN LOGOUT DAN CRUD(INPUT,TAMPILKAN,EDIT,DELETE) KELOMPOK 
1.	Iman Cangga Wiguna
2.	ANANTA P.
3.	SUROSO
4.	SYARIFATUL ITSNA
5.	MOH. BUDI N.
6.	RANTI
PENJELASAN FITUR DAN FUNGSI DARI TIAP FILE PHP WEBSITE RESTORAN MAKANAN untuk forgot password tidak bisa digunakan, yang bisa digunakan login login.php
•	berisi form untuk login
•	$username = $_POST['username'] untuk mengirim data username yang telah diinput
•	$password = $_POST['username'] untuk mengirim data passsword yang telah diinput
•	$query =mysqli($koneksi, "INSERT into tbl login) berfungsi untuk menginput data username dan password ke database agar user bisa login
proseslogin.php
•	menggunakan fungsi session_start untuk memulai session login
•	menggunakan mysqli_num_rows untuk melakukan pengecekan terhadap username dan password
•	menggunakan header('Location:index.php') berfungsi untuk jika berhasil login akan dialihkan kehalaman utama
•	ada tombol form pembayaran zakat, untuk melanjutkan ke halaman index.php
index.php
•	berisi halaman utama setelah kita login
•	berisi  daftar yang telah membayar zakat yang telah kita input
•	berisi menu-menu link yang menghubungkan / link ke halaman untuk input data dan cetak pdf
•	berisi link logout yang jika diklik akan logout halaman website tersebut
•	alaman lain seperti ke halaman home, input, dan cetak pesanan
proses.php
•	fungsi include 'koneksi.php' untuk menghubungkan dengan file koneksi agar terhubung dengan database
•	fungsi if(isset($POST['pesanMakanan])) untuk melakukan mengambil data yang di diinput melalui form addpesanan untuk ditampung sementara sebelum dipush menggunakan query mysqli
•	fungsi "INSERT INTO tbl_zakat yaitu untuk melakukan push ke databse
•	fungsi $sql = mysqli_query($koneksi, $sql) untuk mengeksekusi query sql agar sehingga data yang diinput berhasil disimpan ke database
•	header("Location:index") berfungsi untuk langsung menuju halaman viewdata jika kita telah melakukan input data
update.php
•	include 'koneksi.php' untuk menghubungkan koneksi form update ke database
•	$id = $_GET['id'] berfungsi untuk menampung data id sementara
•	$qe = mysli_query($koneksi, "SELECT * from tbl_zakat where id) berfungsi untuk mengambil data dari database berdasarkan id
•	$data = mysqli_fetch_array($qe) untuk memecah data dari database menjadi array dan ditampilkan ke form
delete.php
•	include 'koneksi.php' berfungsi untuk menghubungkan koneksi ke database
•	$query = "DELETE FROM tbl_pilihrestoran where id berfungsi untuk delete data dari database berdasarkan id
logout.php
•	session_star() berfungsi untuk mengawali session
•	session_destroy() berfungsi untuk mengakhiri session login

