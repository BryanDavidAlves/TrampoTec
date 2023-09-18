<?php
session_start();


session_destroy();

header ('Location: ../../pags-logins/login.php');

?>