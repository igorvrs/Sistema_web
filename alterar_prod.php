<?php 
include('conecta.php');
$id = $_GET['id_produto'];
$sql = ("select * from produto where prod_id = '".$id."'");
$dados = mysql_query($sql, $conexao);
$escrever = mysql_fetch_array($dados);

$id = $escrever['prod_id'];
$nome = $escrever['prod_nome'];
$tipo = $escrever['prod_tipo'];
$qtd_estoque = $escrever['prod_qtdestoque'];
$valor = $escrever['prod_valorunit'];
$valor_venda = $escrever['prod_valorvenda'];
$valor_desc = $escrever['prod_desconto'];
$descricao = $escrever['prod_desc'];
$fornec_id = $escrever['fornec_id'];

?>
<script>
function calcula(){

	var valor = document.getElementById('valor').value;
	var lucro_prod;
	var desc_prod;
	
	lucro_prod = valor * 1.3;

    desc_prod = lucro_prod * 0.88;
		
	document.getElementById('lucro').value = lucro_prod.toFixed(2);
	document.getElementById('desconto_max').value = desc_prod.toFixed(2);	
	//valor_vd = valor_vd.toFixed(2);
	//valor_vd.element.setAttribute("valor_vd", "valor_venda");
	
	} 
</script> 

<html> 
<head> 
<body> 
<meta charset="utf-8">
<form name="produto" method="post" id="produto" action="cad_prod.php">
<fieldset>
<legend>Dados cadastrais</legend>
ID do forncedor:
<input type="text" name="id_forn" id="id_forn" size="8" maxlength="11" value="<?php echo $fornec_id ?>"/><br>
Nome:<br>
<input type="text" name="nome" id="nome" size="50" maxlength="64" value="<?php echo $nome ?>"/> &nbsp;&nbsp;&nbsp;
<select title="Selecione" name="selecione">
  <option>Selecione</option>
  <option value="perecivel">Perecivil</option>
  <option value="naoperecivel">Nao perecivil</option>
</select title="Selecione"> &nbsp;&nbsp;&nbsp;&nbsp; 
Quantidade de estoque:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="qtd_estoque" id="qtd_estoque" size="10" value="<?php echo $qtd_estoque ?>"/>
<br><br>
Valor unitário:
<input type="text" name="valor" id="valor" size="10" value="<?php echo $valor ?>"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Valor de venda: 
 <input type="text" name="lucro" id="lucro" size="10" readonly value="<?php echo $valor_venda ?>"  /> &nbsp;&nbsp;&nbsp; 
Valor máximo de desconto:
<input type="text" name="desconto_max" id="desconto_max" size="10" readonly value="<?php echo $valor_desc ?>"  /> <br><br>
Descrição:<br>
<textarea name="descricao" rows="5" cols="60"><?php echo $descricao ?></textarea> 
</fieldset> <br>
<input type="submit" name="atualizar" id="atualizar" value="Atualizar" />
</form>
<input type="button" id="calcular" value="Calcular" onclick="calcula()"/>
</head>
</html>
