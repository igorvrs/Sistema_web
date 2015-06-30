<?php
header('Content-Type: text/html; charset=utf-8');
include('conecta.php');
$id = $_REQUEST['id'];

$sql = "DELETE from produto where prod_id = '$id'";

mysql_query($sql, $conexao);

header('location: busca_prod.php');

?>