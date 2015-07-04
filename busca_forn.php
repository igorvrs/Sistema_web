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
header('Content-Type: text/html; charset=utf-8');
include('conecta.php');
$busca_cnpj = (!empty($_REQUEST['bus_cnpj']) ? $_REQUEST['bus_cnpj'] : '' );


if ($busca_cnpj == '')
    $res = mysql_query("select * from fornecedores"); 
else	
    $res = mysql_query("select * from fornecedores where forn_cnpj = '".$busca_cnpj."'"); 

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
	<h1>Lista de Fornecedores</h1> 	
<table><tr><th>ID</th><th>CNPJ</th><th>Razão</th><th>Rua</th><th>Numero</th><th>Complemento</th><th>Bairro</th><th>Cep</th>
<th>Cidade</th><th>UF</th><th>País</th><th>Telefone</th><th>E-mail</th><th>Alterar</th><th>Excluir</th></tr>";


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

echo "</tbody></table></head></html>"; 


?>
