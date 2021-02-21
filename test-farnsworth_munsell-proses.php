<?php 
include "database/koneksi.php";
$total=$_POST['total'];
$id=$_POST['id'];
$query="UPDATE hasil_farns SET total='$total' WHERE id='$id'";
$result=mysql_query($query) or die(mysql_error());
?>