<!DOCTYPE HTML>
<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
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
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
        blockquote {
            font: 2em/1em 'Open Sans', sans-serif;
            -webkit-text-stroke: 1px black;
            text-shadow: 2px 2px #000;
            margin: 0px 0 100px 0;
            color: #fff;
        }
        h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 150px;
        }
        </style>
        <body>

<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) {
//jika sudah login
//menampilkan isi session

echo "<center><blockquote>Selamat Datang ". $_SESSION['login'] ."</blockquote></center><br>";
} else {
//session belum ada artinya belum login
die ("<center><br><br><blockquote>Anda belum login! Silahkan Login Terlebih Dahulu
<br>Silahkan login <a href='login.php'>di sini</a></blockquote></center>"); 
}
 ?>
 </body>
</html>