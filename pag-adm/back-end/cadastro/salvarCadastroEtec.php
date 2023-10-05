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
   

    

    $sql = " INSERT INTO tb_etec ( nome , email , codigo , municipio ) VALUES
                (   '$nome',
                    '$email',       
                    '$codigo',
                    '$municipio'

                )
                ";
    $query = $conexao->prepare($sql);
    $query->execute();
    $id = $conexao->lastInsertId();
    
  
    foreach ($_POST["selectName"] as $valor) {

        $select = $_POST["selectName"];
        $querySelect = "SELECT * FROM  tb_curso WHERE nome = $select";

        $query = $conexao->query($querySelect);

        $curso = $query->fetchAll();
        $cursoId = $curso[0];
        // Inserir o valor no banco de dados
        $sql = "INSERT INTO tb_curso_etec ( fk_idCurso , fk_idEtec) VALUES ('$cursoId', $id)"; 
        $query = $conexao->prepare($sql);
        $query->execute();// Substitua 'tabela' e 'coluna' com os nomes apropriados
     } 
    


    header('Location:../../cadastro-etec.php?cadastro=feito');
    exit;
} else {
    header('Location: ../../cadastro-etec.php?cadastro=erro');
}
