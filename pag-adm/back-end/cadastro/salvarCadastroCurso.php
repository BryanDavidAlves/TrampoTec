

<?php 

include '../../../dao/conexao.php';
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nomeCuso']);



    $sql = " INSERT INTO tb_curso ( nome ) VALUES
    (   '$nome'
    )
    ";
$query = $conexao->prepare($sql);
$query->execute();
$id = $conexao->lastInsertId();



$contadorCampos = 1;
    while (isset($_POST["campo{$contadorCampos}"])) {
        $campo = $_POST["campo{$contadorCampos}"];

        $sql2 = "INSERT INTO tb_requisito ( requisito , fk_idCurso ) VALUES
        (   '$campo',
            '$id'
        )
        ";
    $query = $conexao->prepare($sql2);
    $query->execute();
    
    $contadorCampos++;
    
     }
    

     $contadorArea = 1;
    while (isset($_POST["area{$contadorArea}"])) {
        $area = $_POST["area{$contadorArea}"];

        $sql3 = "INSERT INTO tb_area ( area , fk_idCurso ) VALUES
        (   '$area',
            '$id'
        )
        ";
    $query = $conexao->prepare($sql3);
    $query->execute();
    
    $contadorArea++;
    
     }
     header('Location: ../../cadastro-curso.php?cadastro=feito');
     exit;
}
else {
    header('Location: ../../cadastro-curso.php?cadastro=erro');
}
?>