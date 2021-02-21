<?PHP
    include "database/koneksi.php";

    //page 1
    if (isset($_POST['kirim1'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban1'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 12){
                $hasil = 1;
                $reset = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test1='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal='$hasil', red_green='$hasil', total='$hasil', red='$reset', green='$reset' WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $hasil_total = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test1='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal='$hasil', red_green='$hasil', total='$hasil_total', red='$hasil', green='$hasil' WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-2.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah1'])) {
        $username=$_POST['username'];
        $hasil=0;
        $hasil_total = 1;                                     
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test1='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET normal='$hasil', red_green='$hasil', total='$hasil_total', red='$hasil', green='$hasil' WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-2.php';
            </script>
        <?PHP
    }
    //end page 1

    //page 2
    if (isset($_POST['kirim2'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban2'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 8){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test2='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 3) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test2='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test2='$hasil', total=total+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-3.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah2'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test2='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-3.php';
            </script>
        <?PHP
    }
    //end page 2
    
    //page 3
    if (isset($_POST['kirim3'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban3'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 29){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test3='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 70) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test3='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test3='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-4.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah3'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test3='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-4.php';
            </script>
        <?PHP
    }
    //end page 3
    
    //page 4
    if (isset($_POST['kirim4'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban4'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 6){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test4='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 5) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test4='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test4='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-5.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah4'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test4='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-5.php';
            </script>
        <?PHP
    }
    //end page 4
    
    //page 5
    if (isset($_POST['kirim5'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban5'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 5){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test5='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 2) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test5='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test5='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-6.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah5'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test5='$hasil' WHERE username='$username' ");
             $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-6.php';
            </script>
        <?PHP
    }
    //end page 5
    
    //page 6
    if (isset($_POST['kirim6'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban6'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 15){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test6='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 17) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test6='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test6='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-7.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah6'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test6='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-7.php';
            </script>
        <?PHP
    }
    //end page 6
    
    //page 7
    if (isset($_POST['kirim7'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban7'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 3){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test7='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 5) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test7='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test7='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-8.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah7'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test7='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-8.php';
            </script>
        <?PHP
    }
    //end page 7
    
    //page 8
    if (isset($_POST['kirim8'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban8'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 74){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test8='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 21) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test8='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test8='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-9.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah8'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test8='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-9.php';
            </script>
        <?PHP
    }
    //end page 8
    
    //page 9
    if (isset($_POST['kirim9'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban9'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 2){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test9='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test9='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-10.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah9'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test9='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-10.php';
            </script>
        <?PHP
    }
    //end page 9
    
    //page 10
    if (isset($_POST['kirim10'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban10'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 6){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test10='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test10='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-11.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah10'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test10='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-11.php';
            </script>
        <?PHP
    }
    //end page 10

    //page 11
    if (isset($_POST['kirim11'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban11'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 97){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test11='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test11='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-12.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah11'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test11='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-12.php';
            </script>
        <?PHP
    }
    //end page 11

    //page 12
    if (isset($_POST['kirim12'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban12'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 45){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test12='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test12='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-13.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah12'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test12='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-13.php';
            </script>
        <?PHP
    }
    //end page 12

    //page 13
    if (isset($_POST['kirim13'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban13'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 5){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test13='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test13='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-14.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah13'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test13='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-14.php';
            </script>
        <?PHP
    }
    //end page 13

    //page 14
    if (isset($_POST['kirim14'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban14'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 7){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test14='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test14='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-15.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah14'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test14='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-15.php';
            </script>
        <?PHP
    }
    //end page 14

    //page 15
    if (isset($_POST['kirim15'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban15'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 16){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test15='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test15='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-16.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah15'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test15='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-16.php';
            </script>
        <?PHP
    }
    //end page 15

    //page 16
    if (isset($_POST['kirim16'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban16'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 73){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test16='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test16='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-17.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah16'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test16='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['red_green'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-17.php';
            </script>
        <?PHP
    }
    //end page 16

    //page 17
    if (isset($_POST['kirim17'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban17'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 5){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test17='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test17='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-18.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah17'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test17='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-18.php';
            </script>
        <?PHP
    }
    //end page 17

    //page 18
    if (isset($_POST['kirim18'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban18'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 2){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test18='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test18='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-19.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah18'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test18='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-19.php';
            </script>
        <?PHP
    }
    //end page 18

    //page 19
    if (isset($_POST['kirim19'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban19'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 45){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test19='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test19='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-20.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah19'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test19='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-20.php';
            </script>
        <?PHP
    }
    //end page 19

    //page 20
    if (isset($_POST['kirim20'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban20'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 73){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test20='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test20='$hasil' WHERE username='$username' ");
                $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-21.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah20'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test20='$hasil' WHERE username='$username' ");
            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                while ($jumlah=mysql_fetch_array($semua)) {
                    if ($jumlah['total'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
                    }
                    elseif ($jumlah['normal'] > 4) {
                        $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
                    }
                }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-21.php';
            </script>
        <?PHP
    }
    //end page 20

    //page 21
    if (isset($_POST['kirim21'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban21'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 26){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test21='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 6) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test21='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red=red+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 2) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test21='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET green=green+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test21='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-22.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah21'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test21='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-22.php';
            </script>
        <?PHP
    }
    //end page 21

    //page 22
    if (isset($_POST['kirim22'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban22'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 42){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test22='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 2) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test22='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red=red+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 4) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test22='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET green=green+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test22='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-23.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah22'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test22='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-23.php';
            </script>
        <?PHP
    }
    //end page 22

    //page 23
    if (isset($_POST['kirim23'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban23'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 35){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test23='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 5) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test23='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red=red+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 3) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test23='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET green=green+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test23='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-24.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah23'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test23='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
        }
        ?>
            <script language="JavaScript">
                document.location='test-ishihara-24.php';
            </script>
        <?PHP
    }
    //end page 23

    //page 24
    if (isset($_POST['kirim24'])) {
        $username=$_POST['username'];
        $jawaban=$_POST['jawaban24'];
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            if($jawaban == 96){
                $hasil = 1;
                $query=mysql_query("UPDATE hasil_ishihara SET test24='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET normal=normal+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 6) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test24='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red=red+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            elseif ($jawaban == 9) {
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test24='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET green=green+1 WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET red_green=red_green+1 WHERE username='$username' ");
            }
            else{
                $hasil = 0;
                $query=mysql_query("UPDATE hasil_ishihara SET test24='$hasil' WHERE username='$username' ");
                $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");
            }

            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
            while ($jumlah=mysql_fetch_array($semua)) {
            $total = $jumlah['total'];
            $parsial = $jumlah['red_green'];
            $normal = $jumlah['normal'];

            $total_bagi = $total*100/24;
            $parsial_bagi = $parsial*100/24;
            $normal_bagi = $normal*100/24;
            $merah = $jumlah['red'];
            $hijau = $jumlah['green'];

            if ($parsial == 1) {
                $parsial = 0;
            }
            if ($total == 1) {
                $total = 0;
            }

            $total_bagi = $total*100/24;
            $parsial_bagi = $parsial*100/24;
            $normal_bagi = $normal*100/24;
            $merah_bagi = $merah*100/4;
            $hijau_bagi = $hijau*100/4;

            $query=mysql_query("UPDATE hasil_ishihara SET persen_total='$total_bagi', persen_parsial='$parsial_bagi', persen_normal='$normal_bagi', persen_merah='$merah_bagi', persen_hijau='$hijau_bagi' WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='page-hasil.php';
            </script>
        <?PHP
    }

    if (isset($_POST['salah24'])) {
        $username=$_POST['username'];
        $hasil=0;
                                             
        $cekid=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
        
        if (mysql_num_rows($cekid) > 0){
            $query=mysql_query("UPDATE hasil_ishihara SET test24='$hasil' WHERE username='$username' ");
            $query=mysql_query("UPDATE hasil_ishihara SET total=total+1 WHERE username='$username' ");

            $semua=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
            while ($jumlah=mysql_fetch_array($semua)) {
            $total = $jumlah['total'];
            $parsial = $jumlah['red_green'];
            $normal = $jumlah['normal'];
            $merah = $jumlah['red'];
            $hijau = $jumlah['green'];

            if ($parsial == 1) {
                $parsial = 0;
            }
            if ($total == 1) {
                $total = 0;
            }

            $total_bagi = $total*100/24;
            $parsial_bagi = $parsial*100/24;
            $normal_bagi = $normal*100/24;
            $merah_bagi = $merah*100/4;
            $hijau_bagi = $hijau*100/4;

            $query=mysql_query("UPDATE hasil_ishihara SET persen_total='$total_bagi', persen_parsial='$parsial_bagi', persen_normal='$normal_bagi', persen_merah='$merah_bagi', persen_hijau='$hijau_bagi' WHERE username='$username' ");
            }
        }
        ?>
            <script language="JavaScript">
                document.location='page-hasil.php';
            </script>
        <?PHP
    }
    //end page 24
?> 