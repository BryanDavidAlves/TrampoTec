<?php
include('../../../dao/conexao.php');

$email_etec = $_POST['email-etec'];
$senha_etec = $_POST['senha-etec'];

$querySelect = "SELECT * FROM tb_etec WHERE email = '$email_etec' and senha = '$senha_etec'";
$resultado = $conexao->query($querySelect);
$etec = $resultado->fetchAll();
$n = count($etec);
$valor = $etec[11];

if ($n == 1) {

        session_start();
        $_SESSION['idEtec'] = $etec[0]['idEtec'];
        $_SESSION['email'] = $etec[0]['email'];
        $_SESSION['senha'] = $etec[0]['senha'];

       /* $_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../../index.php');
    } 
else {
    header('Location: ../../pags-login-etec/login.php?login=senhaInvalida');
    $_SESSION['autenticado'] = "NAO";
}

?>