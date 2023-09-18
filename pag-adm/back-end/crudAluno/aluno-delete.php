<?php
include('../../../dao/conexao.php');
$id = trim($_GET['id']);

$queryDelete ="DELETE FROM tb_aluno WHERE idAluno= $id";

$remover = $conexao->query($queryDelete);
header('Location: ../../aluno.php');
?>