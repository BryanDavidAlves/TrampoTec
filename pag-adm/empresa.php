<?php
include('../dao/conexao.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST

//passando todos os itens do post para as sua variaveis
if ($_GET['aprovado'] == '1') {
    $querySelect = "SELECT * FROM  tb_empresa WHERE aprovado='1'";

    $query = $conexao->query($querySelect);

    $resultado = $query->fetchAll();
} else {
    $querySelect = "SELECT * FROM  tb_empresa WHERE aprovado='0'";

    $query = $conexao->query($querySelect);

    $resultado = $query->fetchAll();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">

    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/empresa.css">

    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <img class="cima" src="img/fundo2.png" alt="">
    <header>
        <h1>Empresas</h1>
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
                        <a href="empresa.php?aprovado=1">
                            <p>CADASTRADAS</p><a>
                    </div>
                    <div class="btn-side">
                        <a href="empresa.php?aprovado=0">
                            <p>PENDENTES</p><a>
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


                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>CNPJ</th>
                                <th>CEP</th>
                                <th>NÚMERO</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultado as $resultado) { ?>
                                <tr class="infos">
                                    <td class="table-id">
                                        <?= $resultado[0] ?>
                                    </td>
                                    <td class="table-nome-empresa">
                                        <?= $resultado[3] ?>
                                    </td>
                                    <td class="table-email-empresa">
                                        <?= $resultado[1] ?>
                                    </td>
                                    <td class="table-cnpj">
                                        <?= $resultado[4] ?>
                                    </td>
                                    <td class="table-cep">
                                        <?= $resultado[5] ?>
                                    </td>
                                    <td class="table-numero">
                                        <?= $resultado[7] ?>
                                    </td>
                                    <td class="table-estado">
                                        <?= $resultado[9] ?>
                                    </td>
                                    <td class="icone-table">
                                        <?php if ($resultado[11] == 0) { ?>
                                            <a href="./back-end/crudEmpresa/empresa-aceitar.php?id=<?= $resultado[0] ?>"><i
                                                    class="fa-solid fa-check" style="color: #ff0000;"></i></a>

                                            <a href="./back-end/crudEmpresa/empresa-delete.php?id=<?= $resultado[0] ?>"><i
                                                    class="fa-solid fa-x" style="color: #000000;"></i></a>
                                        <?php } ?>
                                        <?php if ($resultado[11] == 1) { ?>
                                            <a
                                                href="./back-end/crudEmpresaCadastrada/empresa-delete.php?id=<?= $resultado[0] ?>"><i
                                                    class="fa-solid fa-x" style="color: #000000;"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


        </section>
    </main>
    <script src="modal-empresa.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>