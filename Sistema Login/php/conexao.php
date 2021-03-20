<?php
    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'CadastroNutri');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
     /**
      * mysqli_connect - Query que conectara no banco de dados com os parametrôs passados da ordem (HOST, USUARIO, SENHA,DATABASE)
      * or die - Parametro passado para caso alguma das informações da conexão esteja incorreto, retornará esse valor.
      * Os parametros da conexão está definidos nas constantes
      */
    
?>