<?php
include '../../../dao/conexao.php';

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

    foreach($resultado as $resultado){
    $id1 =  $resultado[0];
    }
    


    $sql2 = "INSERT INTO tb_vaga (nome , cidade , bairro , tipoTrabalho , salario , descricao , inicio , termino , periodo , curso , area , fk_idEmpresa ) VALUES
                (   '$nome',
                    '$cidade',
                    '$bairro',
                    '$tipoTrabalho',
                    '$salario',
                    '$descricao',
                    '$inicio',
                    '$termino',
                    '$periodo',
                    '$curso',
                    '$area',
                    '$id1'
                    
                )
                ";
    $query2 = $conexao->prepare($sql2);
    $query2->execute();
    $id = $conexao->lastInsertId();

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
