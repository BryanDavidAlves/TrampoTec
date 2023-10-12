<?php
include '../../../dao/conexao.php';



if (isset($_POST['busca'])) {
    $busca = $_POST['busca'];
    $querySelect = "SELECT * FROM  tb_empresa WHERE email LIKE '%$busca%' OR cnpj LIKE '%$busca%'
    OR cep LIKE '%$busca%' OR numero LIKE '%$busca%' OR estado LIKE '%$busca%'";
} else {
    $querySelect = "SELECT * FROM  tb_empresa";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

if ($resultado > 0) {
    foreach ($resultado as $resultado) {
        echo
        '<tr class="infos">
         <td class="table-id">' . $resultado[0] . '</td>',
        '<td class="table-nome-empresa">' . $resultado[1] . '</td>',
        '<td class="table-email-empresa">' . $resultado[3] . '</td>',
        '<td class="table-cnpj">' . $resultado[1] . '</td>',
        '<td class="table-cep">' . $resultado[4] . '</td>',
        '<td class="table-nome-curso">' . $resultado[5] . '</td>',
        '<td class="table-numero">' . $resultado[7] . '</td>',
        '<td class="table-estado">' . $resultado[9] . '</td>',
        '<td class="text-center">
                <form action="cadastro-curso.php" method="POST">
                    <input type="hidden" class="form-control" id="id_curso" name="id_curso"
                        value="'. $resultado[0] .'">
                    <button type="submit" class="dropdown-item"><i
                            class="fas fa-edit fa-lg text-secondary"></i>
                    </button>
                </form>
            </td>
        <td class="icone-table">

        <a href="./back-end/crudCurso/delete-curso.php?id='.$resultado[0].'"> <i class="fa-solid fa-x" style="color: #000000;"></i></a>
        </td>
    </tr>';
    }
}
