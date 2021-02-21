<?php
   session_start();
   session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/alertify.min.css" type='text/css' />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="assets/js/alertify.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<script language="JavaScript">
	alertify.alert("Terimakasih Banyak", function(){ window.location.assign('page-login.php'); }).setHeader(' ').set({closable:false,transition:'zoom'});
</script>