<?php
include('../../../dao/conexao.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome-etec']);
    $email = trim($_POST['email-etec']);
    $senha = trim($_POST['senha-etec']);
    $municipio = trim($_POST['municipio']);
    $codigo = trim($_POST['codigo']);
    $telefone = trim($_POST['telefone']);


  

        $sql = "
                INSERT INTO tb_etec (email , senha , nome , codigo , municipio  ) VALUES
                (   '$email',
                    '$senha',
                    '$nome',
                    '$codigo',
                    '$municipio'   
                )
                ";
    $query2 = $conexao->prepare($sql);
    $query2->execute();
    $id = $conexao->lastInsertId();

    $sql = "INSERT INTO tb_telefone_etec ( telefoneEtec , fk_idEtec ) VALUES
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