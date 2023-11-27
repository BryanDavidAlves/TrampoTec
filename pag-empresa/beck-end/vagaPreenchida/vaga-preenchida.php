<?php
include '../../../dao/conexao.php';

// Pega os dados do formulário

$idVaga = trim($_POST['idVaga']);
 // Define como preenchida

// Insere os dados na tabela
$QuerySelect= "UPDATE tb_vaga SET preenchida = 1 WHERE idVaga = $idVaga";
$query = $conexao->prepare($QuerySelect);
$query->execute();


header('Location: ../../vagas.php');
exit;
?>
