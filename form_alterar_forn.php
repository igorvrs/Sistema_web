<?php 
include('conecta.php');
$id = $_GET["id"];
$sql = ("select * from fornecedores where forn_id = '".$id."'");
$dados = mysql_query($sql, $conexao);
$escrever = mysql_fetch_array($dados);

$id = $escrever['forn_id'];
$razao = $escrever['forn_razaosoc'];
$cnpj = $escrever['forn_cnpj'];
$rua = $escrever['forn_rua'];
$numero = $escrever['forn_numero'];
$complemento = $escrever['forn_complemento'];
$bairro = $escrever['forn_bairro'];
$cep = $escrever['forn_cep'];
$cidade = $escrever['forn_cidade'];
$uf = $escrever['forn_uf'];
$pais = $escrever['forn_pais'];
$fone = $escrever['forn_fone'];
$email = $escrever['forn_email'];


?>

<html>
<head>
<body>

<form name="fornecedor" method="post" id="fornecedor" action="update_forn.php">
<meta charset="utf-8">
<fieldset>
<legend>Dados para alteracao</legend>
<input type="hidden" name="id" id="id" size="3" value="<?php echo $id  ?>" /> <br>
Razão:<br>
<input type="text" name="razao" id="razao" size="50" value="<?php echo $razao  ?>" /> &nbsp;&nbsp;&nbsp;
CNPJ:
<input type="text" name="cnpj" size="20" maxlength="14" value="<?php echo $cnpj ?> "/> <br>
Rua:<br>
<input type="text" name="rua" size="50" value="<?php echo $rua ?>"/> &nbsp;&nbsp;&nbsp;
Numero:
<input type="text" name="numero" size="10" value="<?php echo $numero ?>"/> <br>
Complemento:<br>
<input type="text" name="complemento" size="20" value="<?php echo $complemento ?>"/>&nbsp;&nbsp;&nbsp;
Bairro:
<input type="text" name="bairro" size="15" value="<?php echo $bairro ?>"/>&nbsp;&nbsp;&nbsp;
CEP:
<input type="text" name="cep" size="10" maxlength="8" value="<?php echo $cep ?>"/> <br>
Cidade: <br>
<input type="text" name="cidade" size="20" value="<?php echo $cidade ?>"/>&nbsp;&nbsp;&nbsp;
UF:
<input type="text" name="uf" size="3" maxlength="2" value="<?php echo $uf ?>"/>&nbsp;&nbsp;&nbsp;
País:
<input type="text" name="pais" size="15" value="<?php echo $pais ?>"/> <br>
Fone:<br>
<input type="text" name="fone" size="20" maxlength="11" value="<?php echo $fone ?>"/>&nbsp;&nbsp;&nbsp;
E-mail:
<input type="text" name="email" size="40" id="email" value="<?php echo $email ?>"/> <br>
</fieldset> <br>
<input type="submit" value="Alterar">
</form>
</body>
</head>
</html>