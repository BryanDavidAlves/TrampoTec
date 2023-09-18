<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO'){

    header ('Location: ../../../one-page/index.php?login=erro');
}

?>