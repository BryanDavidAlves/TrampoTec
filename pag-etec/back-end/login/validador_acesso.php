<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'não'){

    header ('Location: ../../../one-page/index.php?login=erro');
}
else if(!isset($_SESSION['aprovado']) || $_SESSION['aprovado'] == 'não'){
    header ('Location: pags-login-etec/login.php?login=naoaprovado');
}
?>