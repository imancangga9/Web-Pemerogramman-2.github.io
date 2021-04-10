<!DOCTYPE HTML>
<html>
    <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
        <title>Halaman Data Zakat</title>
        <style>
        body{
            background: white;
            color: black;        
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

        .container {
            background-color: #afc3a8;
            border-radius: 5px;
        }
    </style>
</head>
<body style="text-align: center;">

    <div class="container" style="margin-top: 20px;">

        <?php
        session_start();
        //pemeriksaan session
        if (isset($_SESSION['login'])) {
        //jika sudah login
        //menampilkan isi session

        echo "<center>". $_SESSION['login'] ."</center><br>";
        } else {
        //session belum ada artinya belum login
        die ("<center>
        <h2>Username atau Password yang dimasukan salah</h2>
        <br><button><a href='login.php'>Login Lagi</a></button></center>
        "); 
        }
        ?>
    </div> 
 </body>
</html>