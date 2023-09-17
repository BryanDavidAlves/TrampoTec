<?php
include('../../../dao/conexao.php');

$email_professor = $_POST['email-professor'];
$senha_professor = $_POST['senha-professor'];

$querySelect = "SELECT * FROM tb_professor WHERE email = '$email_professor' and senha = '$senha_professor'";
$resultado = $conexao->query($querySelect);
$professor = $resultado->fetchAll();
$n = count($professor);


if ($n == 1) {

        session_start();
        $_SESSION['idProfessor'] = $professor[0]['idProfessor'];
        $_SESSION['email'] = $professor[0]['email'];
        $_SESSION['senha'] = $professor[0]['senha'];

       /* $_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../../index.php');
    } 
else {
    header('Location: ../../login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>