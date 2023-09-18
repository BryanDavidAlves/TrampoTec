<?php
include('../../../dao/conexao.php');

$email_adm = $_POST['email'];
$senha_adm = $_POST['senha'];

$querySelect = "SELECT * FROM tb_empresa WHERE email = '$email_adm' and senha = '$senha_adm' ";
$resultado = $conexao->query($querySelect);
$adms = $resultado->fetchAll();
$n = count($adms);

if ($n == 1) {
    session_start();
    $_SESSION['idEmpresa'] = $adms[0]['idEmpresa'];
    $_SESSION['email'] = $adms[0]['email'];
    $_SESSION['senha'] = $adms[0]['senha'];

    /* $_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
    $_SESSION['autenticado'] = 'SIM';
    header('Location: ../../index.php');

} else {
    header('Location: ../../login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>