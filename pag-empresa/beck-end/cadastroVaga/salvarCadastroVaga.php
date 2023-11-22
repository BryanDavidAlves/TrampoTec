<?php
include '../../../dao/conexao.php';
require_once "../login/validador_acesso.php";

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $id_vaga = trim($_POST['id_vaga']);
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


    if (is_numeric($id_vaga)) {
        $sql = " UPDATE tb_vaga SET
        nome = '$nome',
        cidade = '$cidade',
        bairro= '$bairro',
        modalidade= '$tipoTrabalho',
        salario= '$salario',
        descricao= '$descricao',
        inicio= '$inicio',
        termino= '$termino',
        periodo= '$periodo',
        escala= '$semana',   
        fk_idEmpresa= '$cliente_id',
        fk_idCurso= '$curso'
        WHERE idVaga = $id_vaga
        ";

        $query = $conexao->prepare($sql);
        $query->execute();


        header("Location: ../../adicionar-requisito-vaga.php?id=$id_vaga");
    } else {
        $sql2 = "INSERT INTO tb_vaga ( nome , cidade , bairro , modalidade , salario , descricao , inicio , termino , periodo , area , escala , fk_idEmpresa , fk_idCurso) VALUES
                (   '$nome',
                    '$cidade',
                    '$bairro',
                    '$tipoTrabalho',
                    '$salario',
                    '$descricao',
                    '$inicio',
                    '$termino',
                    '$periodo',
                    '$area',
                    '$semana',
                    '$cliente_id',
                    '$curso'

                )
                ";
        $query2 = $conexao->prepare($sql2);
        $query2->execute();
        $id = $conexao->lastInsertId();





        header("Location: ../../adicionar-requisito-vaga.php?id=$id");
        exit;
    }
} else {
    header('Location: ../../cadastrar-vaga.php?CadastroVaga=erro');
    $_SESSION['autenticado'] = "NAO";
}
