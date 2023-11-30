<?php include('../../../dao/conexao.php');
require_once "../login/validador_acesso.php";
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome-etec']);
    $curso = trim($_POST['curso']);
     $semestre = trim($_POST['semestre']);
    $periodo = trim($_POST['periodo']);
    $conclusao = trim($_POST['conclusao']);
   
    $aluno_id = $_SESSION['idAluno'];


    //Salvando etec
    $sql2 = "INSERT INTO tb_aluno_etec ( fk_idEtec , fk_idAluno ) VALUES
    (   '$nome',
        '$aluno_id'   
    )";
     $query = $conexao->prepare($sql2);
     $query->execute();

     //Salvando curso
     $sql = "INSERT INTO tb_aluno_curso ( fk_idAluno , fk_idCurso ) VALUES
     (   '$aluno_id',
         '$curso'   
     )";
   
    $query = $conexao->prepare($sql);
    $query->execute();

     //Salvando periodo, semestre conclusao duração curso
     $sql = "INSERT INTO tb_perfil_aluno ( semestre, periodo, conclusao, fk_idAluno ) VALUES
     (  '$semestre' ,
        '$periodo',
        '$conclusao',
        '$aluno_id'
            
     )";
   
    $query = $conexao->prepare($sql);
    $query->execute();


    $id = $conexao->lastInsertId();
    header('Location: ../../curriculo.php?primeiro=1');
exit;
    }
else{
    header('Location: ../../pags-logins/login.php?login=erro');
}



?>