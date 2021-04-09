<!DOCTYPE HTML>
<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
        <style>
		blockquote {
			font: 2em/1em 'Open Sans', sans-serif;
			-webkit-text-stroke: 1px black;
			text-shadow: 2px 2px #000;
			margin: -35px 0 100px 0;
			color: #fff;
		}
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
            h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 0px;
        }
        </style>
        <body>
<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();
		echo "<center>
		<h1>Anda berhasil logout</h1>
		<blockquote>Anda berhasil logout</blockquote>
		";
		}
	else{
		echo "Silahkan Login Terlebih Dahulu";
	}
 ?>
<?php header( "refresh:5;url=login.php" );?>
</body>
<script>alert('redirecting to login page in 5 second')</script>
</html>