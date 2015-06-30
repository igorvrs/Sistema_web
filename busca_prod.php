<?php

header('Content-Type: text/html; charset=utf-8');
include('conecta.php');
$id_prod = (!empty($_REQUEST['id_prod']) ? $_REQUEST['id_prod'] : '' );


if ($id_prod == '')
    $res = mysql_query("select * from produto"); 
else	
    $res = mysql_query("select * from fornecedores where prod_id = '".$id_prod."'"); 

echo "<table><tr><td>id</td><td>Nome</td><td>Tipo</td><td>Quantidade de estoque</td><td>Valor</td><td>Valor de venda</td>
<td>Valor máximo de desconto</td><td>Descrição</td><td>Alterar</td><td>Excluir</td></tr>";


while($escrever=mysql_fetch_array($res)){


echo "<tr><td>" . $escrever['prod_id'] . "</td><td>" . $escrever['prod_nome'] . "</td> <td>" . $escrever['prod_tipo'] . "</td>
<td>" . $escrever['prod_qtdestoque'] . "</td><td>" . $escrever['prod_valorunit'] . "</td><td>" . $escrever['prod_valorvenda'] . "</td>
<td>" . $escrever['prod_desconto'] . "</td><td>" . $escrever['prod_desc'] . "</td><td><a href = 'alterar_prod.php?id_produto=".$escrever['prod_id']."'>Alterar</a>
</td><td><a href = 'excluir_forn.php?id=".$escrever['prod_id']."'>Excluir</a></td></tr>"; 

}

echo "</table>"; 


?>