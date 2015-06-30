<?php
header('Content-Type: text/html; charset=utf-8');
include('conecta.php');
$id = $_REQUEST['prod_id'];
$fornec_id = $_REQUEST['id_forn'];
$nome = $_REQUEST['nome'];
$selecione = $_REQUEST['selecione'];
$qtd_estoque = $_REQUEST['qtd_estoque'];
$valor = $_REQUEST['valor'];
$valor_venda = $_REQUEST['lucro'];
$valor_desc = $_REQUEST['desconto_max'];
$descricao = $_REQUEST['descricao'];

$res = mysql_query("select * from fornecedores where forn_id = '".$fornec_id."'");

if (mysql_affected_rows() == 0){
   echo '<script> alert ("Fornecedor não encontrado."); 
   window.location.href="alterar_prod.html"</script>';
   
}

$sql = ("UPDATE produto set prod_nome = '$nome', prod_tipo = '$selecione', prod_desc = '$descricao', prod_valorunit = '$valor', prod_valorvenda = '$valor_venda',
    fornec_id = '$fornec_id', prod_desconto = '$valor_desc', prod_estoque = '$qtd_estoque' where prod_id = '$id'");
	
	mysql_query($sql, $conexao);
		
	header('location: busca_prod.php');	

?>