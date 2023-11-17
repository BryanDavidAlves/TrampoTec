<?php
include '../../../dao/conexao.php';

$idAluno = trim($_GET['idAluno']);
$idVaga = trim($_GET['idVaga']);

$queryDelete ="DELETE FROM tb_vaga_aluno WHERE fk_idAluno = $idAluno and fk_idVaga = $idVaga ";


$remover = $conexao->query($queryDelete);
header("Location: ../../vagas-candidato.php?aprovado=0&idVaga=$idVaga");
?>