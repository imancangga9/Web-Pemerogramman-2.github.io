<!DOCTYPE HTML>
<html>
    <head>
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
        <style>
		.login {
			padding: 2em;
			margin: 8em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}	
		h4 {
			font-size: 40px;
			font-family: sans-serif;
			margin-bottom: 20px;
			margin-top: 10px;
		}
            h2, h3, h6 {
            font-family: sans-serif;
            margin-top: 0px;
        }
		h1{
			font-size: 20px;
			margin-top: 30px;
		}
        </style>
        <body>
<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();
		echo "<center>
		<h1>Anda Telah Keluar Dari Form Ini Silahkan Login Kembali</h1>
		<br><button><a href='login.php'>login</a></button></center>
		";
		}
	else{
		//session belum ada artinya belum login
		die ("<center><button><a href='login.php'>login</a></button></center>"); 
	}
 ?>
<?php header( "url=login.php" );?>
</body>
</html>