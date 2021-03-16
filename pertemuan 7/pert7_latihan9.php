<html>
    <head>
        <title> penggunaan in array </title>
    </head>
    <body>
        <?php
            $program = array("html", "php", "css", "javascript");
            print_r($program);
            $cari = "html";
            if (in_array($cari, $program)) {
             echo "program basis web $cari ada di dalam array";
            } else {
                echo "program basis web $cari tidak ada di dalam array";
            }
        ?>
    </body>
</html>
