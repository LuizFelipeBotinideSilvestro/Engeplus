<?php

if ((isset($_POST['Nome'])) && (isset($_POST['Email']))){
    
    
    header("Location: consultas.php");
    
}else{
    echo "usuário ou senha inválidos.";
    header("Location: index.php");
}
    
    
    
    
    
    
include_once("conexao.php");
        
?>
