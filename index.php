<?php
session_start(); // iniciando a sessão para verificar se o login existe ou não
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Sistema de Login</title>
</head>
<body>
    
    <div class='Principal'>
        <div class="titulo">
            <h1>Sistema de Login do Nutricionista</h1>
        </div>
        <div class="conteudo">
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="erro"><h2>Erro: Usuario ou senha invalidos</h2></div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            
            <div class="formulario">
                <form action="./php/login.php" method="POST">
                    <input type="text" name='crn' required placeholder="Digite seu CRN">
                    <input type="text" name='senha' required placeholder="Digite sua senha">
                    <br>
                    <input type="submit" value="Acessar" name='acessar' placeholder="Acessar">
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>