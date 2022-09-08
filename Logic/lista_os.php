<?php 

$cliente['id'] = NULL;


$sql_os = "SELECT * FROM ordem_de_servico ORDER BY id ASC;"; //Codigo de select todos os dados da tabela cliente.
$queryos = $mysqli->query($sql_os); // Faz a variável receber a query acima.
$num_os =  $queryos->num_rows; // exibe a quantidade de itens cadastrados.


if(!$queryos){
    echo "Falha ao indexar dados do SQL. Revise o código";
}

?>