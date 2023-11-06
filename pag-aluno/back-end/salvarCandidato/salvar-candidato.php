<?php
include '../../../dao/conexao.php';
require_once "../login/validador_acesso.php";
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST

if ($_POST) {

    //passando todos os itens do post para as sua variaveis

    $sql = "INSERT INTO tb_vaga_aluno(   fk_idAluno ) VALUES
    (   '$id'

    )
    ";
    $query = $conexao->prepare($sql);
    $query->execute();
    $id = $conexao->lastInsertId();
    header('Location: ../../perfil.php');
    exit;

} else {
    header('Location: ../../perfil.php?alterar=erro');

}
