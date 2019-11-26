<!DOCTYPE html>
<html lang = "pt-br">
    
    <head>
        <meta charset="utf-8">
        <title> Sistema de Login</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class = "container">
            <nav>
                <ul class="menu"> 
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="login.php"><li>Login</li></a>
                    
                    </ul>
            </nav>
            <section>
                <h1>Faça o seu login.</h1>

                <hr><br><br>
                
                <form method = "post" action="validaLogin.php"> 
                    <input type= "submit" value="Entrar" class="btn"> 
                    <input type="reset" value="Limpar" class="btn">
                    
                    <br> <br>
                    nome<br>
                    <input type ="text" name="Nome" class ="campo" maxlength="40" required autofocus> <br>
                    Email<br>
                    <input type ="email" name="Email" class ="campo" maxlength="50" required ><br>
                        
            </section>
                <hr><br><br>
            </section>
        </div>  
        
<?php
        
        include_once("conexao.php");
        if(isset($_POST['Entrar'])){
            $nome = $_POST['Nome'];
            $email = md5($post['Email']);
            $query_select = "select * from usuario where login= '$nome' and email= '$email'";
            
        }
        
?>
    </body>
</html>

