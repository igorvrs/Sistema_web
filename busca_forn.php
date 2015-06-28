<?php 
function mask($val, $mask)
{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
   if($mask[$i] == '#')
   {
      if(isset($val[$k]))
       $maskared .= $val[$k++];
   }
   else
 {
     if(isset($mask[$i]))
     $maskared .= $mask[$i];
     }
 }
 return $maskared;
}

?>

<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
include('conecta.php');
$busca_cnpj = (!empty($_REQUEST['bus_cnpj']) ? $_REQUEST['bus_cnpj'] : '' );


if ($busca_cnpj == '')
    $res = mysql_query("select * from fornecedores"); 
else	
    $res = mysql_query("select * from fornecedores where forn_cnpj = '".$busca_cnpj."'"); 

echo "<table><tr><td>id</td><td>cnpj</td><td>razao</td><td>rua</td><td>numero</td><td>complemento</td><td>bairro</td><td>cep</td>
<td>cidade</td><td>uf</td><td>pais</td><td>fone</td><td>email</td><td>alterar</td><td>excluir</td></tr>";


while($escrever=mysql_fetch_array($res)){
$cnpj = $escrever['forn_cnpj'];
$cnpj_masc = mask($cnpj,'##.###.###/####-##');
$cep = $escrever['forn_cep'];
$cep_masc = mask($cep,'#####-###');
$fone = $escrever['forn_fone'];
$fone_masc = mask($fone, '(##)#####-####');

echo "<tr><td>" . $escrever['forn_id'] . "</td><td>"  .$cnpj_masc. "</td><td>" . $escrever['forn_razaosoc'] . "</td>
<td>" . $escrever['forn_rua'] . "</td><td>" . $escrever['forn_numero'] . "</td><td>" . $escrever['forn_complemento'] . "</td>
<td>" . $escrever['forn_bairro'] . "</td><td>" . $cep_masc . "</td><td>" . $escrever['forn_cidade'] . "</td>
<td>" . $escrever['forn_uf'] . "</td><td>" . $escrever['forn_pais'] . "</td><td>" . $fone_masc . "</td>
<td>" . $escrever['forn_email'] . "</td><td><a href = 'form_alterar_forn.php?id=".$escrever['forn_id']."'>Alterar</a></td>
<td><a href = 'excluir_forn.php?id=".$escrever['forn_id']."'>Excluir</a></td></tr>"; 

}

echo "</table>"; 


?>
