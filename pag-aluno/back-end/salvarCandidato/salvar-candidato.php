<?php
include '../../../dao/conexao.php';
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST

if ($_POST) {

    $idAluno = trim($_POST['bnt']);
    $idVaga = trim($_POST['idVaga']);

    echo $idAluno, $idVaga;

    $sql = "INSERT INTO tb_vaga_aluno ( fk_idAluno, fk_idVaga ) VALUES
    (   '$idAluno',
        '$idVaga'

    )
    ";
    $query = $conexao->prepare($sql);
    $query->execute();
    $id = $conexao->lastInsertId();
    header('Location: ../../painel-de-vagas.php');
    exit;
} else {
    header('Location: ../../painel-de-vagas.php?alterar=erro');
}
