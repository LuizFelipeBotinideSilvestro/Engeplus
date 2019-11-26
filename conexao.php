<?php

$hostname = "localhost";
$user = "root";
$passaword = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$passaword,$database);

if(!$conexao){
    print "Falha na conexao com o Banco de Dados.";
}

?>