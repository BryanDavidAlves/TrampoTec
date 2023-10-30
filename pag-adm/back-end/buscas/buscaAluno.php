<?php
include '../../../dao/conexao.php';

if (isset($_POST['busca'])) {
    $busca = $_POST['busca'];
    $querySelect = "SELECT * FROM  tb_aluno WHERE cpf LIKE '%$busca%' OR nome LIKE '%$busca%'
    OR cep LIKE '%$busca%' OR estado LIKE '%$busca%'";
} else {
    $querySelect = "SELECT * FROM  tb_aluno";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

if ($resultado > 0) {
    foreach ($resultado as $resultado) {
        echo
        '<tr class="infos">
         <td class="table-id">' . $resultado[0] . '</td>',
        '<td class="table-nome-aluno">' . $resultado[3] . '</td>',
        '<td class="table-email-aluno">' . $resultado[1] . '</td>',
        '<td class="text-center">' . $resultado[4] . '</td>',
        '<td class="text-center">' . $resultado[10] . '</td>',
        '<td class="text-center">' . $resultado[9] . '</td>',
        '<td class="text-center">' . $resultado[7] . '</td>',
            ' <td class="icone-table">
        <a  href="back-end/crudAluno/aluno-delete.php?id=' . $resultado[0] . '"><i  class="fa-solid fa-x" style="color: #000000;"></i></a>
    </td>
    </tr>';
    }
}
