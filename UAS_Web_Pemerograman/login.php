<!DOCTYPE HTML>
<html>
    <head>
        <title>Laporan Pembayaran Zakat</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style>
            .container{
                background: #afc3a8;
                width:100%;
                margin:auto;
                max-width:525px;
                min-height:550px;
                position:relative;
                box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
            }
            .input{
                border-radius: 30px; 
                 
                margin: 20px auto;
                background-color: white;
            }
            .group{
              
                padding: 10px;
                position: relative;
            }
            h4 {
			font-size: 40px;
			font-family: sans-serif;
			margin-bottom: 20px;
			margin-top: 10px;
            }
                h1, h2, h3, h6 {
                font-family: sans-serif;
                margin-top: 0px;
            }
            .login {
                padding: 70px 40px;
                margin:  auto;
                width:calc(100% - 20px);
                margin-bottom: 15px;
                border: none;
                
            }				
            input[type="password"],
            input[type="text"],
            textarea {
            padding: 10px;
            width: 95%;
            background: white;
            border: 30px;
            font-size: 10pt;
            margin: 6px 0px;
            }
            h4 {
                font-size: 40px;
                font-family: sans-serif;
                margin-bottom: 20px;
                margin-top: 10px;
            }
            .btn {
                border-radius: 30px;
                padding: 10px;
                width:calc(100% - 20px);
                margin: 20px auto;
                border: none;
                background-color:white;
                font-size: 18px;
                color: afc3a8;
                box-shadow:5 5px 5px 5 rgba(0,0,0,.24);
            
            }
            button{
            background-color: white;
            color: white;
            padding: 20px, 25px;
           
            display: inline;
            margin-bottom: 30px;
            }
            a {
                font-size: 18px;
                font-weight: 400;
                text-decoration: none;
                color: black;
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
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input name="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input name="pass" type="password" class="input">
                        </div>
                        <div class="group">
                            <input href="input.php" class="btn" type="submit" name="login" id="partyTimeButton" value="Login">
                        </div>
            </form>
        </div>      
                
        <?php 
            session_start();
            if (isset($_POST['login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
            if ($user === "Kelompok4" && $pass == "1234") {
                $_SESSION['login'] = $user;
                
                echo "<center ><button><a href='index.php'><b>Lihat Data Pembayaran</b></button></center>";
                }else {
                    header('location:index.php');
                }
            }
        ?>
        
    </body>
</html>