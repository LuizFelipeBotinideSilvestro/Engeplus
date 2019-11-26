<?php

include_once("conexao.php");

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$profissao = $_POST['Profissao'];

$sql = "insert into usuarios (Nome,Email,Profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang = "pt-br">
    
    <head>
        <meta charset="utf-8">
        <title> Sistema</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class = "container">
            <nav>
                <ul class="menu"> 
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consultas</li></a>
                    <a href="login.php"><li>login</li></a>
                    <a href="vendas.php"><li>Vendas</li></a>
                    </ul>
            </nav>
            <section>
                <h1>Confirmação de Cadastro.</h1>
                
                <?php
                
                if ($linhas == 1){
                    
                    print "Cadastro efetuado com sucesso!";
                }else{
                    
                    print "Cadastro não efetuado. <br> E-mail ja cadastrado.";
                }
                
                ?>
                <hr><br><br>
            </section>
        </div>    
    </body>
</html>