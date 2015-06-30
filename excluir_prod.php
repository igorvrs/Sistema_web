<?php
header('Content-Type: text/html; charset=latin1_swedish_ci');
include('conecta.php');
$id = $_REQUEST['id'];

$sql = "DELETE from produto where prod_id = '$id'";

mysql_query($sql, $conexao);

header('location: busca_prod.php');

?>