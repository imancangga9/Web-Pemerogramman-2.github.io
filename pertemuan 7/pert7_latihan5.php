<html>
    <head>
        <title> penggunaan list </title>
    </head>
    <body>
        <?php
            $program = array('bobo','doraemon','spiderman');
            list($majalah, $komik, $film) = $program;
            echo "jenis buku & hiburan :";
            echo "<br />";
            echo "cerpen : $majalah";
            echo "<br />";
            echo "cerita bergambar : $komik";
            echo "<br />";
            echo "bioskop : $film";
        ?>
    </body>
</html>
