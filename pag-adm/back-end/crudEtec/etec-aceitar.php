<?php
include('../../../dao/conexao.php');
$id = trim($_GET['id']);

$queryAprovar ="UPDATE tb_etec SET aprovado = 1 WHERE idEtec = $id";

$aprovar = $conexao->query($queryAprovar);
header('Location: ../../etec.php?aprovado=0');
?>