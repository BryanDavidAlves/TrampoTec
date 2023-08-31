<?php
include('../../../dao/conexao.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);


        $sql = " INSERT INTO tb_admin ( nome , email , senha ) VALUES
                (   '$nome'
                    '$email',
                    '$senha'
                )
                ";
    $query = $conexao->prepare($sql);
    $query->execute();

    header('Location: ../../../one-page/index.html');
    exit;
} else {
    header('Location: login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>