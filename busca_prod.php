<?php

header('Content-Type: text/html; charset=latin1_swedish_ci');

include('conecta.php');
$id_prod = (!empty($_REQUEST['id_prod']) ? $_REQUEST['id_prod'] : '' );


if ($id_prod == '')
    $res = mysql_query("select * from produto"); 
else	
    $res = mysql_query("select * from fornecedores where prod_id = '".$id_prod."'"); 
echo "<html>
<head>
<body>
<meta charset='utf-8'>
<link rel='stylesheet' href='css/css/style.css' />
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'/>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript' charset='utf-8'></script>
    <script src='js/jquery.uniform.min.js' type='text/javascript' charset='utf-8'></script>
    <script type='text/javascript' charset='utf-8'>
      $(function(){
        $('input:checkbox, input:radio, input:file, select').uniform();
      });
    </script>
	<h1>Lista de Produtos</h1>
   
	<table><tr><th>id</th><th>Nome</th><th>Tipo</th><th>Quantidade de estoque</th><th>Valor</th><th>Valor de venda</th>
<th>Valor máximo de desconto</th><th>Descrição</th><th>Alterar</th><th>Excluir</th></tr>";


while($escrever=mysql_fetch_array($res)){


echo "<tbody><tr><td>" . $escrever['prod_id'] . "</td><td>" . $escrever['prod_nome'] . "</td> <td>" . $escrever['prod_tipo'] . "</td>
<td>" . $escrever['prod_qtdestoque'] . "</td><td>" . $escrever['prod_valorunit'] . "</td><td>" . $escrever['prod_valorvenda'] . "</td>
<td>" . $escrever['prod_desconto'] . "</td><td>" . $escrever['prod_desc'] . "</td><td><a href = 'alterar_prod.php?id_produto=".$escrever['prod_id']."'>Alterar</a>
</td><td><a href = 'excluir_prod.php?id=".$escrever['prod_id']."'>Excluir</a></td></tr>"; 

}

echo "</tbody></table></head></html>"; 


?>