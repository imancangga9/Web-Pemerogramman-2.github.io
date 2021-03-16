<html>
    <head>
        <title> penggunaan list 2 </title>
    </head>
    <body>
        <?php
            $program = array('bobo','doraemon','spiderman');
            list($majalah, , $film) = $program;
            echo "jenis buku & hiburan :";
            echo "<br />";
            echo "cerpen : $majalah";
            echo "<br />";
            echo "bioskop : $film";
        ?>
    </body>
</html>
