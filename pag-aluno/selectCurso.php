<?php
include ('../dao/conexao.php');

$etec = $_GET['nome-etec'];






/* $query =$conexao->prepare("SELECT tb_curso_etec.fk_idEtec, tb_curso_etec.fk_idCurso , tb_curso.nome , tb_curso.idCurso
FROM tb_curso_etec
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso WHERE fk_idEtec =: idEtecfk ORDER BY tb_curso.nome ASC " );

$data = ['idEtecfk' => $etec];



$query->execute($data); */


$querySelect = "SELECT * FROM  tb_curso_etec WHERE fk_idEtec = $etec";

$query = $conexao->prepare($querySelect);
$query->execute();
$resultado = $query->fetchAll();

foreach ($resultado as $resultado){
    $idCurso =  $resultado[0];
    $querySelect = "SELECT * FROM  tb_curso WHERE idCurso = $idCurso";

    $query = $conexao->query($querySelect);

    $cursoNome = $query->fetchAll();
    $query->execute();
    foreach($cursoNome as $cursoNome) {
    ?>
    <option value="<?php echo $cursoNome[0]?>"><?php echo $cursoNome[1]?></option>

    <?php
    }
}



/* 
$curso = $query->fetchAll();

foreach($curso as $curso){?>



<?php
}
 */

?>