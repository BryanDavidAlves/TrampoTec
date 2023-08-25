<?php
    include('../../../dao/conexao.php');

    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
        //passando todos os itens do post para as sua variaveis
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $cnpj = trim($_POST['cnpj']);
        $cep = trim($_POST['cep']);
        $logradouro = trim($_POST['logradouro']);
        $numero = trim($_POST['numero']);
        $bairro = trim($_POST['bairro']);
        $estado =trim($_POST['estado']);
    
    $sql = "
    INSERT INTO tb_empresa (email , senha , nome , cnpj, cep , logradouro , numero , bairro , estado) VALUES
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
    $query = $conexao->prepare($sql);
    $query->execute();
    }
    header('Location: ../../../one-page/index.html');
    exit;

?>