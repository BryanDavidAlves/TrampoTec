<?php
include('../../../dao/conexao.php');

$email_empresa = $_POST['email'];
$senha_empresa = $_POST['senha'];

$querySelect = "SELECT * FROM tb_empresa WHERE email = '$email_empresa' and senha = '$senha_empresa'";
$resultado = $conexao->query($querySelect);
$empresa = $resultado->fetchAll();
$n = count($empresa);
$valor = $empresa[11];

if ($n == 1) {

        session_start();
        $_SESSION['idEmpresa'] = $empresa[0]['idEmpresa'];
        $_SESSION['email'] = $empresa[0]['email'];
        $_SESSION['senha'] = $empresa[0]['senha'];

       /* $_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../../home.php');
    } 
else {
    header('Location: ../../pags-logins/login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>