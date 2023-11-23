<?php
include '../../../dao/conexao.php';

if (isset($_POST['busca'])) {
    $busca = $_POST['busca'];
    $querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga
WHERE tb_aluno.nome LIKE '%$busca%' OR tb_vaga.nome LIKE '%$busca%' OR tb_aluno.email LIKE '%$busca%'

";
} else {
    $querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga


";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

foreach ($resultado as $resultado) {
    echo
    '<tr class="infos">
         <td class="table-id">' . $resultado[24] . '</td>',
    '<td class="table-nome-aluno">' . $resultado[15] . '</td>',
    '<td class="table-email-aluno">' . $resultado[22] . '</td>',

        '</tr>';
}
