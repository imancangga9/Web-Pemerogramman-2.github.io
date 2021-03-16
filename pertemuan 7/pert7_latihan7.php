<html>
    <head>
        <title> penggunaan split </title>
    </head>
    <body>
        <?php
            $tanggal = "17-05-2010";
            list($hari, $bulan, $tahun) = split ("-", $tanggal);
            echo "hari = $hari";
            echo "<br />";
            echo "bulan = $bulan";
            echo "<br />";
            echo "tahun = $tahun";
        ?>
    </body>
</html>
