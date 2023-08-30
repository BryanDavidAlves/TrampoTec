<?php
include('../../../dao/conexao.php');

$email_aluno = $_POST['nome-aluno'];
$senha_aluno = $_POST['senha-aluno'];

$querySelect = "SELECT * FROM tb_aluno WHERE email = '$email_aluno' and senha = '$senha_aluno'";
$resultado = $conexao->query($querySelect);
$aluno = $resultado->fetchAll();
$n = count($aluno);


if ($n == 1) {

        session_start();
        $_SESSION['idAluno'] = $aluno[0]['idAluno'];
        $_SESSION['email'] = $aluno[0]['email'];
        $_SESSION['senha'] = $aluno[0]['senha'];

       /* $_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../../index.php');
    } 
else {
    header('Location: ../../login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>