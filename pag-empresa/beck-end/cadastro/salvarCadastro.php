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


    //Verificar cnpj é valido ou nao
    $CnpjValido = validar_cnpj($cnpj);
    $senhaForte = isStrongPassword($senha);
    $formattedPhoneNumber = formatPhoneNumber($telefone);


    if ($CnpjValido == false) {
        header('Location: ../../pags-logins/criar-login.php?login=cnpjInvalido');
    } else if ($senhaForte == false) {
        header('Location: ../../pags-logins/criar-login.php?login=senhaFraca');
    } else if ($formattedPhoneNumber == false) {
        header('Location: ../../pags-logins/criar-login.php?login=numeroTelInvalido');
    } 
    else if ($CnpjValido == true || $senhaForte == true) {
        $formattedCNPJ = formatCNPJ($cnpj);

        $sql = "
                INSERT INTO tb_empresa (email , senha , nome , cnpj, cep , logradouro , numero , bairro , estado) VALUES
                (   '$email',
                    '$senha',
                    '$nome',
                    '$formattedCNPJ',
                    '$cep',
                    '$logradouro',
                    '$numero',
                    '$bairro',
                    '$estado'
                )
                ";
        $query = $conexao->prepare($sql);
        $query->execute();

        header('Location: ../../../one-page/index.html');
        exit;
    }
} else {
    header('Location: login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}

?>