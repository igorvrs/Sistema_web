<?php
ini_set('default_charset', 'UTF-8');
include('conecta.php');
$fornec_id = $_POST['id_forn'];
$nome = $_POST['nome'];
$selecione = $_POST['selecione'];
$selecione = iconv('UTF-8', 'ISO-8859-1', $selecione);

//$selecione = utf8_decode($selecione);
$qtd_estoque = $_POST['qtd_estoque'];
$valor_unit = $_POST['valor'];
$valor_venda = $_POST['lucro'];
$valor_desc = $_POST['desconto_max'];
$descricao = $_POST['descricao'];

/*if ($selecione == 1)
   $selecione = "perecível";
else
   $selecione = "não perecível";
*/

$res = mysql_query("select * from fornecedores where forn_id = '".$fornec_id."'");

if (mysql_affected_rows() == 0){
   echo '<script> alert ("Fornecedor não encontrado."); 
   window.location.href="form_produto.html"</script>';
   
}

while($escrever=mysql_fetch_array($res)){
   
   if (empty($fornec_id) || empty($nome) || empty($selecione) || empty($qtd_estoque) || empty($valor_unit) || empty($valor_venda) ||
   empty($valor_desc) || empty($descricao))
       echo '<script> alert ("Dados incomplemtos.") </script>';
	   
	 else 

 $sql = mysql_query ("INSERT INTO produto (prod_nome, prod_tipo, prod_desc, prod_valorunit, prod_valorvenda, fornec_id, prod_desconto, prod_qtdestoque) values	
  ('".$nome."', '".$nome."', '".$descricao."', '".$valor_unit."', '".$valor_venda."', '".$fornec_id."', '".$valor_desc."', '".$qtd_estoque."')")
   or die (mysql_error());        
}    
header('Location:busca_prod.php');
?>