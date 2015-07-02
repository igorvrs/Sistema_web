<?php 
header('Content-Type: text/html; charset=latin1_swedish_ci');
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
<meta charset="utf-8">
<link rel="stylesheet" href="css/css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input:checkbox, input:radio, input:file, select").uniform();
      });
    </script>
<script>
</script>
<h1>Atualizar Fornecedores</h1>
<form name="fornecedor" method="post" id="fornecedor" action="update_forn.php">
<input type="hidden" name="id" size="3" value="<?php echo $id ?>" />
<label for="razao">Razão:</label>
<input type="text" name="razao" id="razao" size="60" value="<?php echo $razao ?>"/> <br><br>	
<label for="cnpj">CNPJ:</label>
<input type="text" name="cnpj" id="cnpj" size="20" maxlength="14" value="<?php echo $cnpj ?>"/> <br><br>

<label for="rua">Rua:</label>
<input type="text" name="rua" id="rua" size="30" value="<?php echo $rua ?>"/>

<label for="numero">Numero:</label>
<input type="text" name="numero" id="numero" size="7" value="<?php echo $numero ?>"/> <br><br>

<label for="complemento">Complemento:</label><br>
<input type="text" id="complemento" name="complemento" size="15" value="<?php echo $complemento ?>"/>
<label for="bairro">Bairro:</label>
<input type="text" name="bairro" id="bairro" size="15" value="<?php echo $bairro ?>"/>
<label for="cep">CEP:</label>
<input type="text" name="cep" size="10" id="cep"  maxlength="8" value="<?php echo $cep ?>"/> <br><br>
<label for="cidade">Cidade:</label><br>
<input type="text" name="cidade" id="cidade" size="20" value="<?php echo $cidade ?>"/>
<label for="uf">UF:</label> 	
<input type="text" name="uf" size="3" id="uf" maxlength="2" value="<?php echo $uf ?>"/>
<label for="pais">País:</label>
<input type="text" name="pais" size="15" id="pais" value="<?php echo $pais ?>"/> <br><br>
<label for="fone">Telefone:</label><br>
<input type="text" name="fone" size="15" id="fone" maxlength="11" value="<?php echo $fone ?>"/>
E-mail:
<input type="text" name="email" size="40" id="email" value="<?php echo $email ?>"/> <br>
 <br>
<input type="submit" value="Atualizar">
</form>
</body>
</head>
</html>