<?php
include('conecta.php');
$id = $_REQUEST['id'];

$sql = "DELETE from fornecedores where forn_id = '$id'";

mysql_query($sql, $conexao);

header('location: busca_forn.php');

?>