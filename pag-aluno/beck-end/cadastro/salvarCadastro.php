<?php include('../../../dao/conexao.php');
require('funcoes.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cdp-aluno']);
    $dtNascimento = trim($_POST['nasc-aluno']);
    $etecNome = trim($_POST['nome-etec']);
    $senha = trim($_POST['senha']);
    $cep = trim($_POST['cep']);
    $logradouro = trim($_POST['logradouro']);
    $numero = trim($_POST['numero']);
    $bairro = trim($_POST['bairro']);
    $cidade = trim($_POST['cidade']);
    $estado = trim($_POST['estado']);
    $telAluno = trim($_POST['telefone']);
    $email = trim($_POST['email']);

   
    
    $sql2 = "INSERT INTO tb_aluno ( email , senha , nome , cpf , dtNasc , bairro , estado , cidade , cep , etecDoAluno ) VALUES
    (   '$email',
        '$senha',
        '$nome',
        '$cpf',
        '$dtNascimento',
        '$bairro',
        '$estado',
        '$cidade',
        '$cep',
        '$etecNome'
    )
    ";

    $query2 = $conexao->prepare($sql2);
    $query2->execute();
    $id = $conexao->lastInsertId();

    $sql = "INSERT INTO tb_telefone_aluno ( telefoneAluno , fk_idAluno ) VALUES
    (   '$telAluno',
        '$id'
    )
    ";
        
    $query = $conexao->prepare($sql);
    $query->execute();
    header('Location: ../../../one-page/index.html');
exit;
    }
else{
    header('Location: ../../pags-logins/login.php?login=erro');
}



?>