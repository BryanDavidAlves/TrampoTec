<?php
include('../../../dao/conexao.php');
require('funcoes.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $cnpj = trim($_POST['cnpj']);
    $cep = trim($_POST['cep']);
    $logradouro = trim($_POST['logradouro']);
    $numero = trim($_POST['numero']);
    $bairro = trim($_POST['bairro']);
    $estado = trim($_POST['estado']);
    $telefone = trim($_POST['telefone']);



    $sql2 = "INSERT INTO tb_empresa (email , senha , nome , cnpj, cep , logradouro , numero , bairro , estado) VALUES
                (   '$email',
                    '$senha',
                    '$nome',
                    '$cnpj',
                    '$cep',
                    '$logradouro',
                    '$numero',
                    '$bairro',
                    '$estado'
                )
                ";
    $query2 = $conexao->prepare($sql2);
    $query2->execute();
    $id = $conexao->lastInsertId();

    $sql = "INSERT INTO tb_telefone_empresa ( numeroTelefone , fk_idEmpresa ) VALUES
    (   '$telefone',
        '$id'
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