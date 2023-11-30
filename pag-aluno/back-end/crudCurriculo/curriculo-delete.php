<?php
include('../../../dao/conexao.php');
require_once "../login/validador_acesso.php";
$id = trim($_POST['id_usuario']);
$idCurso = trim($_POST['id_curso']);



$queryDelete ="DELETE FROM tb_idioma_aluno WHERE ididiomaAluno = $idiomaid";

$remover = $conexao->query($queryDelete);
header('Location: ../../formulario2.php');
?>