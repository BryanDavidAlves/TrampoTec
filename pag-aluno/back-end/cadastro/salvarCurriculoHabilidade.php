<?php 
include('../../../dao/conexao.php');
require_once "../login/validador_acesso.php";
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    
    $aluno_id = $_SESSION['idAluno'];

    foreach($_POST['habilidades'] ?? [] as $habilidades){
        
        $sql2 = "INSERT INTO tb_habilidade_aluno ( fk_idAluno , fk_idHabilidade ) VALUES
        (   '$aluno_id',
            '$habilidades'       
        )";
         $query = $conexao->prepare($sql2);
         $query->execute();
         $id = $conexao->lastInsertId();
    
      
    }



    
     header('Location: ../../index.php?curriculo=sim'); 
exit;
    }
else{
    header('Location: ../../formulario3.php?login=erro');
}



?>