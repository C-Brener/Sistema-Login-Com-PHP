<?php
    if(!$_SESSION['usuario']){ // caso a sessão nao exista
        header('Location: ../index.php'); // será feito o logout e redirecionara para a pagina inicial
        exit();
    }

?>