<!DOCTYPE html>
<html>
    <head>
        <title>Penggunaan Switch - Case</title>
    </head>
    <body>
        Hari Ini :
        <?php  
            $nama_hari = date("1");
            switch ($nama_hari) {
                case "Sunday":
                    Print("Minggu");
                        print "Waktu untuk istirahat";
                    break;
                case "Monday":
                    Print("Senin <br>");
                        print "Meeting awal minggu jam 08.00";
                    break;
                case "Tuesday" ; 
                    Print("Selasa <br>");
                        Print "Pembukaan Workshop Diklat";
                    break;
                
                case "Wednesday" ;
                    Print("Rabu <br>");
                        Print ("Seminar Launchig Window Vista di JHCC");
                    break;

                case "Thrusday" ;
                    Print("Kamis <br>");
                        Print "Pertemuan dengan Mahasiswa";
                    break;
                
                case "Friday" ;
                    Print("Jum’at <br>");
                    Print "Jogging bersama";
                    break;
            
                default :
                    Print("Sabtu <br>");
                    print "Survey harga ke Dusit, Mangga Dua";
            }
        ?>
    </body>
</html>