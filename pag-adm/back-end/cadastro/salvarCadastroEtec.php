<?php
include '../../../dao/conexao.php';

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $codigo = trim($_POST['codigo']);
    $municipio = trim($_POST['municipio']);


    $sql = "
                INSERT INTO tb_etec (email , nome , codigo , municipio ) VALUES
                (   '$email',
                    '$nome',
                    '$codigo',
                    '$municipio'

                )
                ";
    $query = $conexao->prepare($sql);
    $query->execute();
    $id = $conexao->lastInsertId();

    header('Location:../../cadastro-etec.php?cadastro=feito');
    exit;
} else {
    header('Location: ../../cadastro-etec.php?cadastro=erro');
}
