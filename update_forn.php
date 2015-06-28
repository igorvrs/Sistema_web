<?php
include('conecta.php');

$id = $_REQUEST['id'];
$razao = $_REQUEST['razao'];
$cnpj = $_REQUEST['cnpj'];
$rua = $_REQUEST['rua'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cep = $_REQUEST['cep'];
$cidade = $_REQUEST['cidade'];
$uf = $_REQUEST['uf'];
$pais = $_REQUEST['pais'];
$fone = $_REQUEST['fone'];
$email = $_REQUEST['email'];




$sql = ("UPDATE fornecedores set forn_razaosoc = '$razao', forn_cnpj = '$cnpj', forn_rua = '$rua', forn_numero = '$numero', forn_complemento = '$complemento',
    forn_bairro = '$bairro', forn_cep = '$cep', forn_uf = '$uf', forn_pais = '$pais', forn_fone = '$fone', forn_email = '$email' where forn_id = '$id'");
	
	mysql_query($sql, $conexao);
		
	header('location: busca_forn.php');	

?>