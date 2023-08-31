<?php
session_start();


session_destroy();

header ('Location: ../../pags-login-etec/login.php');

?>