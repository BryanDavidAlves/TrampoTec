<?php
include('../dao/conexao.php');

if ($_GET['aprovado'] == '1') {
    $querySelect = "SELECT * FROM  tb_etec WHERE aprovado='1'";

    $query = $conexao->query($querySelect);

    $etec = $query->fetchAll();
} else {
    $querySelect = "SELECT * FROM  tb_etec WHERE aprovado='0'";

    $query = $conexao->query($querySelect);

    $etec = $query->fetchAll();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/etec.css">

    <title>Etecs</title>
</head>

<body>
    <img class="cima" src="img/fundo2.png" alt="">
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Etecs</h1>
    </header>
    <main>
        <div class="secao-busca">
            <section class="sistema-busca">
                <div class="barra-pesquisa">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                </div>

                <div class="align-filtro">
                    <div class="btn-side">
                        <a href="etec.php?aprovado=1">
                            <p>CADASTRADAS</p>
                        </a>
                    </div>
                    <div class="btn-side">
                        <a href="etec.php?aprovado=0">
                            <p>PENDENTES</p>
                        </a>
                    </div>
                    <div class="filtro" onclick="abrirFiltro()">
                        <span class="material-symbols-outlined">
                            tune
                        </span>
                        <p>Filtrar</p>

                    </div>
                </div>

                <div class="modal-filtro" id="abrir-filtro">
                    <form action="">
                        <div class="align-form-filtro">
                            <label for="">Periodo</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Horario</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Curso</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Area</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <input type="submit" value="Aplicar" class="button-filtro">

                    </form>
                </div>
        </div>

        <section class="etec">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>CÓDIGO</th>
                        <th>MUNICIPIO</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etec as $etec) { ?>
                        <tr class="infos">
                            <td class="table-id">
                                <?= $etec[0] ?>
                            </td>
                            <td class="table-nome-etec">
                                <?= $etec[3] ?>
                            </td>
                            <td class="table-email-etec">
                                <?= $etec[1] ?>
                            </td>
                            <td class="codigo-etec">
                                <?= $etec[4] ?>
                            </td>
                            <td class="table-email-etec">
                                <?= $etec[5] ?>
                            </td>
                            <td class="icone-table">
                                <?php if ($etec[7] == 0) { ?>
                                    <a href="./back-end/crudEtec/etec-aceitar.php?id=<?= $etec[0] ?>"><i
                                            class="fa-solid fa-check" style="color: #ff0000;"></i></a>

                                    <a href="./back-end/crudEtec/etec-delete.php?id=<?= $etec[0] ?>"> <i class="fa-solid fa-x"
                                            style="color: #000000;"></i></a>
                                <?php } ?>
                                <?php if ($etec[7] == 1) { ?>
                                    <a href="./back-end/crudEtec/etec-delete.php?id=<?= $etec[0] ?>"> <i class="fa-solid fa-x"
                                            style="color: #000000;"></i></a>
                                <?php } ?>


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
    </main>
    <script src="modal-etec.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>