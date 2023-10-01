<?php
include '../../../dao/conexao.php';
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST

if ($_POST) {

    //passando todos os itens do post para as sua variaveis
    $id = trim($_POST['id']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $novo_nome = trim($_POST['foto_usuario']);
    $curso = trim($_POST['curso']);

    $sql = " UPDATE tb_professor SET

                  nome = '$nome' ,
                  email =  '$email' ,
                  senha = '$senha',
                  imagem = '$novo_nome',
                  fk_idCurso= '$curso'
             WHERE idProfessor='$id'
                ";

    $query = $conexao->prepare($sql);
    $query->execute();

} else {
    header('Location: perfil.php?alterar=erro');
}
