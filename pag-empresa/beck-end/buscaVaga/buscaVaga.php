<?php
include '../../../dao/conexao.php';

if ($_GET) {

    $idEmpresa = trim($_GET['idEmpresa']);

    if (isset($_POST['busca'])) {
        $busca = $_POST['busca'];

        $info = "SELECT tb_vaga.cidade, tb_vaga.area, tb_vaga.periodo, tb_vaga.bairro, tb_vaga.idVaga,
        tb_vaga.nome, tb_vaga.descricao ,  tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem,
        tb_requisito.requisito
       FROM tb_vaga
       INNER JOIN tb_curso
       ON tb_vaga.fk_idCurso = tb_curso.idCurso
       INNER JOIN tb_empresa
       ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa
       INNER JOIN tb_requisito_vaga
       on tb_vaga.idVaga = tb_requisito_vaga.fk_idVaga
       INNER JOIN tb_requisito
       ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito
       WHERE (tb_vaga.nome LIKE '%$busca%' OR tb_vaga.cidade LIKE '%$busca%' OR tb_vaga.bairro LIKE '%$busca%'
       OR tb_vaga.area LIKE '%$busca%' OR tb_vaga.periodo LIKE '%$busca%' )AND tb_empresa.idEmpresa = $idEmpresa
       ";
    } else {

        $info = "SELECT tb_vaga.cidade, tb_vaga.area, tb_vaga.periodo, tb_vaga.bairro, tb_vaga.idVaga,
        tb_vaga.nome, tb_vaga.descricao ,  tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem,
        tb_requisito.requisito
       FROM tb_vaga
       INNER JOIN tb_curso
       ON tb_vaga.fk_idCurso = tb_curso.idCurso
       INNER JOIN tb_empresa
       ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa

       INNER JOIN tb_requisito_vaga
       on tb_vaga.idVaga = tb_requisito_vaga.fk_idVaga
       INNER JOIN tb_requisito
       ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito
       WHERE tb_empresa.idEmpresa = 15
       ";
    }
}

$result = $conexao->query($info);

$vagas = array();
foreach ($result as $vaga) {
    $vagaId = $vaga['idVaga'];
    if (!isset($vagas[$vagaId])) {
        $vagas[$vagaId] = array(
            'nome' => $vaga['nome'],
            'descricao' => $vaga['descricao'],
            'curso' => $vaga['curso'],

            'salario' => $vaga['salario'],
            'empresa' => $vaga['empresa'],
            'imagem' => $vaga['imagem'],

            'requisito' => $vaga['requisito'],
            'cidade' => $vaga['cidade'],
            'idVaga' => $vaga['idVaga'],
            'bairro' => $vaga['bairro'],
            'area' => $vaga['area'],
            'periodo' => $vaga['periodo'],

        );
    }
}

foreach ($vagas as $vaga) {
    echo
    '<tr class="infos">
         <td class="table-id">' . $vaga['idVaga'] . '</td>',
    '<td class="table-nome-aluno">' . $vaga['nome'] . '</td>',
    '<td class="table-email-aluno">' . $vaga['cidade'] . '</td>',
    '<td class="table-email-aluno">' . $vaga['bairro'] . '</td>',
    '<td class="table-email-aluno">' . $vaga['area'] . '</td>',
    '<td class="table-email-aluno">' . $vaga['periodo'] . '</td>',
        '<td class="text-center">
    <form method="GET" action="vagas-candidato.php">
    <input type="hidden" value="1" name="aprovado">
    <button id="ver-mais-vaga" type="submit" name="idVaga" value="' . $vaga['idVaga'] . '" href="vagas-candidato.php"> VER MAIS </button>
    </form>
    <td>
    <td class="icone-table">
            <form action="cadastrar-vaga.php" method="POST" class="editar-vaga">
            <input type="hidden" class="form-control" id="id" name="id" value="' . $vaga['idVaga'] . '">
            <button type="submit" class="botao-editar" class="dropdown-item">
            <i class="fa-solid fa-pen-to-square"></i>
            </button>
            </form>
            <button class="delete-vaga">
            <a href="./beck-end/crudVaga/vaga-delete.php?id=' . $vaga['idVaga'] . '"> <i class="fa-solid fa-x"></i></a>
             </button>
    <td>
        </tr>';
}
