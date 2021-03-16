<html>
    <head>
        <title> penggunaan in array dengan type data </title>
    </head>
    <body>
        <?
            $tipe = array('1.10', 5.0, 1.13);
            if (in_array('5.0', $tipe, true)) {
                echo "string \"5.0\" ada di dalam array";
            } else {
                echo "string \"5.0\" tidak ada di dalam array";
            }
                echo "<br />";
            if (in_array(1.13, $tipe, true)) {
                echo "bilangan 1.13 ada di dalam array";
            } else {
                echo "bilangan 1.13 tidak ada di dalam array";
            }
        ?>
    </body>
</html>
