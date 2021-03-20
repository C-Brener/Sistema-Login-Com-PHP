<?php
session_start();
session_destroy();
header('Location: ../index.php'); // redirecionando a pagina para onde sera levada ao deslogar da sessao

?>