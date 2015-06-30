<?php
header('Content-Type: text/html; charset=latin1_swedish_ci');
include('conecta.php');
$razao = $_POST["razao"];
$cnpj = $_POST["cnpj"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$pais = $_POST["pais"];
$fone = $_POST["fone"];
$email = $_POST["email"];


if (empty($razao) || empty($cnpj) || empty($rua) || empty($numero) || empty($complemento) || empty($bairro) || empty($cep) || empty($cidade) || 
empty($uf) || empty($pais) || empty($fone) || empty($email)) {
	echo '<script> alert ("Dados incomplemtos.");
	window.location.href="fornecedores.html" </script>';

	 
	
} else {
$sql = mysql_query("INSERT INTO fornecedores (forn_cnpj, forn_razaosoc, forn_rua, forn_numero, forn_complemento, 
forn_bairro, forn_cep, forn_cidade, forn_uf, forn_pais, forn_fone, forn_email)
values ('".$cnpj."', '".$razao."', '".$rua."', '".$numero."', '".$complemento."', '".$bairro."', '".$cep."',
'".$cidade."','".$uf."','".$pais."','".$fone."','".$email."')") or die (mysql_error());
 
header('Location: busca_forn.php');
}
?>