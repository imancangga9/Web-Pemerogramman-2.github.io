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
			margin: -80px 0 100px 0;
			color: #fff;
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
		.login {
			padding: 2em;
			margin: 8em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}				
		input[type="password"],
		input[type="text"],
		input[type="email"],
		textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
		}
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
        </style>
    </head>
    <body>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 mx-auto">
			
                <div class="login">
				<center><h4>Login</h4></center>
            <form method="post">
                <input type="text" name="user" placeholder="USER"><br>
                <input type="password" name="pass" placeholder="PASSWORD"><br>
                <input class="btn" type="submit" name="login" id="partyTimeButton" value="Login">
				
            </form>
        </div>  
		
		<?php 
	session_start();
	if (isset($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
	if ($user === "Kelompok4" && $pass == "1234") {
		$_SESSION['login'] = $user;
		echo "<script>alert('Anda Berhasil Login')</script>";
		echo "<center><br><br><blockquote id='timeEvent'><a href='index.php'>Form Data Pembayaran Zakat</blockquote></center>";
	}else {
	
	}
}
 ?>
    </body>
</html>