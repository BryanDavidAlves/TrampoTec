<?php
include '../../../dao/conexao.php';
$id = trim($_GET['id']);

$idvaga = trim($_POST['idVaga']);

$queryDelete ="DELETE FROM tb_vaga_aluno WHERE fk_idAluno = $id";

$remover = $conexao->query($queryDelete);
header('Location: ../../vagas-candidato.php?aprovado=0');
?>