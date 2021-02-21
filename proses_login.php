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
   session_start();
   require_once("database/koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username' ");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
      ?>
        <script language="JavaScript">
          alertify.alert("SIAPA KAMU SIAPA KAMU", function(){ window.location.assign('page-login.php'); }).setHeader(' ').set({closable:false,transition:'zoom'});
        </script>
      <?PHP
    } else{
      if($pass <> $hasil['password']) {
      ?>
        <script language="JavaScript">
          alertify.alert("Password Salah", function(){ window.location.assign('page-login.php'); }).setHeader(' ').set({closable:false,transition:'zoom'});
        </script>
      <?PHP
      } else{
       $_SESSION['username'] = $hasil['username'];
       $_SESSION['id'] = $hasil['id'];
       header('location:home.php');
      }
    }
?>
</body>
</html>