<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="assets/css/alertify.min.css" type='text/css' />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="assets/js/alertify.min.js"></script>
</head>
<body>  
<?php
  require_once("database/koneksi.php");
  if (isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = addslashes(strip_tags ($_POST['password']));
    $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");

    if(mysql_num_rows($cekuser) > 0){
        ?>
          <script language="JavaScript">
              alertify.alert("Anda Sudah Terdaftar, Silahkan Login", function(){ window.location.assign('page-login.php'); }).setHeader(' ').set({closable:false,transition:'zoom'});
          </script>
        <?PHP
    }
    else{
      $simpan = mysql_query("INSERT INTO user SET username='$username',password='$pass',email='$email'");
      $nilai_ishihara = mysql_query("INSERT INTO hasil_ishihara SET username='$username'");
      $nilai_farns = mysql_query("INSERT INTO hasil_farns SET username='$username'");

      $jawab_ishihara = mysql_query("INSERT INTO buta_ishihara SET username='$username'");

      if($simpan){
        ?>
          <script language="JavaScript">
            alertify.alert("Akun Berhasil Dibuat, Silahkan Login", function(){ window.location.assign('page-login.php'); }).setHeader(' ').set({closable:false,transition:'zoom'});
          </script>
        <?PHP
      }
      else{
        echo "Proses Gagal!";
      }
    }
  }
?>
</body>
</html>