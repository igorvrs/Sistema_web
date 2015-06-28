<?php
include('conecta.php');
$fornec_id = $_POST['id_forn'];
$nome = $_POST['nome'];
$selecione = $_POST['selecione'];
$qtd_estoque = $_POST['qtd_estoque'];
$valor_unit = $_POST['valor'];
$valor_venda = $_POST['valor_venda'];
$valor_desc = $_POST['valor_desc'];
$descricao = $_POST['descricao'];

$res = mysql_query("select * from fornecedores where forn_id = '".$fornec_id."'");

while($escrever=mysql_fetch_array($res)){

if ($escrever['forn_id'] == '')
   echo '<script> alert ("Fornecedor nao encontrado.")</script>';
else{
   if (empty($fornec_id) || empty($nome) || empty($selecione) || empty($qtd_estoque) || empty($valor_unit) || empty($valor_venda) ||
   empty($valor_desc) || empty($descricao)){
       echo '<script> alert ("Dados incomplemtos.") </script>';
	   
	} else {

 $sql = mysql_query("INSERT INTO produto (prod_nome, prod_tipo, prod_desc, prod_valorunit, prod_valorvenda, fornec_id, prod_desconto, prod_qtdestoque) values	
  ('".$nome."', '".$selecione."', '".$valor_desc."', '".$valor_unit."', '".$valor_venda."', '".$fornec_id."', '".$valor_desc."', '".$qtd_estoque."')")
   or die (mysql_error());      
    }
}
}
?>