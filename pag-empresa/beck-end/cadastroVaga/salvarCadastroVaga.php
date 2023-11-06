<?php
include '../../../dao/conexao.php';
require_once "../login/validador_acesso.php";

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis

    $querySelect = "SELECT * FROM  tb_empresa WHERE idEmpresa";
    $query = $conexao->query($querySelect);
    $resultado = $query->fetchAll();

    $nome = trim($_POST['nome']);
    $cidade = trim($_POST['cidade']);
    $bairro = trim($_POST['bairro']);
    $salario = trim($_POST['salario']);
    $curso = trim($_POST['curso']);
    $descricao = trim($_POST['descricao']);
    $area = trim($_POST['area']);
    $periodo = trim($_POST['periodo']);
    $inicio = trim($_POST['inicio']);
    $termino = trim($_POST['termino']);
    $tipoTrabalho = trim($_POST['tipo']);
    $semana = trim($_POST['semana']);
    $cliente_id = $_SESSION['idEmpresa'];

    $sql2 = "INSERT INTO tb_vaga ( nome , cidade , bairro , /*tipoTrabalho */ salario , descricao , inicio , termino , periodo , area , /*semana*/  fk_idEmpresa , fk_idCurso) VALUES
                (   '$nome',
                    '$cidade',
                    '$bairro',
                    /*'$tipoTrabalho',*/
                    '$salario',
                    '$descricao',
                    '$inicio',
                    '$termino',
                    '$periodo',
                    '$area',
                    /*'$semana',*/
                    '$cliente_id',
                    '$curso'

                )
                ";
    $query2 = $conexao->prepare($sql2);
    $query2->execute();
    $id = $conexao->lastInsertId();

/*     $sql2 = "INSERT INTO tb_vaga_curso ( fk_idCurso , fk_idVaga ) VALUES
(   '$curso',
'$id'

)
";
$query2 = $conexao->prepare($sql2);
$query2->execute(); */

    $contadorCampos = 1;
    while (isset($_POST["campo{$contadorCampos}"])) {
        $campo = $_POST["campo{$contadorCampos}"];

        $sql2 = "INSERT INTO tb_requisito ( requisito ) VALUES
        (   '$campo'

        )
        ";
        $query = $conexao->prepare($sql2);
        $query->execute();
        $idrequisito = $conexao->lastInsertId();

        $sql2 = "INSERT INTO tb_requisito_vaga ( fk_idVaga , fk_idRequisito ) VALUES
        (   '$id',
            '$idrequisito'

        )
        ";
        $query = $conexao->prepare($sql2);
        $query->execute();
        $contadorCampos++;

    }
    /*   $sql = "INSERT INTO tb_telefone_empresa ( numeroTelefone , fk_idEmpresa ) VALUES
    (   '$telefone',
    '$id'
    )
    ";

    $query = $conexao->prepare($sql);
    $query->execute(); */
    header('Location: ../../vagas.php');
    exit;
} else {
    header('Location: ../../cadastrar-vaga.php?CadastroVaga=erro');
    $_SESSION['autenticado'] = "NAO";
}
