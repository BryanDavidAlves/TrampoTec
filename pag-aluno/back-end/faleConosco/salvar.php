<?php

include('../../../dao/conexao.php');

if ($_POST) {

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $categoria = trim($_POST['categoria']);
    $comentario = trim($_POST['comentario']);

    $sql =
        "INSERT INTO tb_fale_conosco
        (nome,email,categoria,comentario)
        VALUES 
        ('$nome','$email','$categoria','$comentario')";

    $query = $conexao->prepare($sql);
    $query->execute();
}

header('Location: ../../contato.php');
exit;
