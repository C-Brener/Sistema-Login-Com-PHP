<?php
    session_start(); // serve para indicar ao php que desejamos trabalhar com session
    include('verificando_login.php') //puxando o arquivo verificador
?>
<h1>
    <?php 
    
    echo "Olá Lorena, seu CRN é: ";
    echo $_SESSION['usuario'];
    
    ?>
    
</h1>
<h2><a href="logout.php">Sair</a></h2> <!--Serve ppara chamar a função de deslogar criada no logout.php-->