<?php
include '../../../dao/conexao.php';



if (isset($_POST['busca'])) {
    $busca = $_POST['busca'];
    $querySelect = "SELECT * FROM  tb_admin WHERE nome LIKE '%$busca%' OR email LIKE '%$busca%'";
} else {
    $querySelect = "SELECT * FROM  tb_admin";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

if ($resultado > 0) {
    foreach ($resultado as $resultado) {
        echo
        '<tr class="infos">
        <td class="table-id">
            '.$resultado[0].'
        </td>
        <td class="table-nome-adm">
            '. $resultado[1] .'
        </td>
        <td class="table-email-adm">
            '. $resultado[2] .'
        </td>

        <td class="icone-table"> 
                <a href="./back-end/crudAdm/adm-delete.php?id='. $resultado[0] .'"><i class="fa-solid fa-x" style="color: #000000;"></i></a>
        
        </td>
    </tr>';
    }
}
