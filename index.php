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
                    <a href="login.php"><li>Login</li></a>
                    </ul>
            </nav>
            <section>
                <h1>Ainda não é um usuário? Cadastre-se!</h1>
                <hr><br><br>
                
                <form method = "post" action="processa.php"> 
                    <input type= "submit" value="Salvar" class="btn"> 
                    <input type="reset" value="Limpar" class="btn">
                    
                    <br> <br>
                    nome<br>
                    <input type ="text" name="Nome" class ="campo" maxlength="40" required autofocus> <br>
                    Email<br>
                    <input type ="email" name="Email" class ="campo" maxlength="50" required ><br>
                    Profissão<br>
                    <input type ="text" name="Profissao" class ="campo" maxlength="40" required ><br>
                        
            </section>
   
        </div>    
    </body>
</html>