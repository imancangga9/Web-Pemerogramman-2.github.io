<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            Nilai 1 : <input type="text" name="bilangan1">
            <select name="pilih">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*"></option>
                <option value="/">/</option>
            </select>
             Nilai 2 : <input type="text" name="bilangan2">
            <input type="submit" name="hitung" value="Hitung">
        </form>
    </body>
</html>

<?php  
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bilangan1'];
        $bil2 = $_POST['bilangan2'];
        $pilih = $_POST['pilih'];

        if($pilih){
            if($bil1 == "" || $bil2 == ""){
                ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
            }elseif($pilih == '+'){
                $hasil = $bil1 + $bil2;
                echo "Hasil pertambahan $bil1 dengan $bil2 = ".$hasil;
            }elseif($pilih == '-'){
                $hasil = $bil1 - $bil2;
                echo "Hasil pengurangan $bil1 dengan $bil2 = ".$hasil;
            }elseif($pilih == '*'){
                $hasil = $bil1 * $bil2;
                echo "Hasil perkalian $bil1 dengan $bil2 = ".$hasil;
            }elseif($pilih == '/'){
                $hasil = $bil1 / $bil2;
                echo "Hasil pembagian $bil1 dengan $bil2 = ".$hasil;
            }
        }
    }
?>