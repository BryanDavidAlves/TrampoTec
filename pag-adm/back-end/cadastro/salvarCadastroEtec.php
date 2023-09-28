<?php
include '../../../dao/conexao.php';

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $id_etec = trim($_POST['id_etec']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $codigo = trim($_POST['codigo']);
    $municipio = trim($_POST['municipio']);
    $curso = trim($_POST['curso']);







    $sql1 = "
                INSERT INTO tb_etec ( nome , email , codigo , municipio ) VALUES
                (   '$nome',
                    '$email',       
                    '$codigo',
                    '$municipio'

                )
                ";
    $query = $conexao->prepare($sql1);
    $query->execute();
    $id = $conexao->lastInsertId();

  
        $sql1 = " INSERT INTO tb_curso_etec ( fk_idCurso , fk_idEtec ) VALUES
        (   '$curso',
            '$id'
        )
        ";
    
$query = $conexao->prepare($sql1);
$query->execute();
    

    header('Location:../../cadastro-etec.php?cadastro=feito');
    exit;
} else {
    header('Location: ../../cadastro-etec.php?cadastro=erro');
}
