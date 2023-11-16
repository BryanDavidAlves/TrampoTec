<?php
include '../../../dao/conexao.php';
$id = trim($_GET['id']);

$queryAprovar = "UPDATE tb_vaga_aluno SET aprovado = 1 ";

$aprovar = $conexao->query($queryAprovar);
header('Location: ../../vagas-candidato.php?aprovado=1');
