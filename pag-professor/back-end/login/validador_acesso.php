<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'não'){

    header ('Location: ../../../one-page/index.php?login=erro');
}

?>