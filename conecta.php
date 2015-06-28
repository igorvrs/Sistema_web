<?php 
$banco = "sistema";
$host = "localhost";
$user = "sistema";
$pass = "sistema123";

$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>