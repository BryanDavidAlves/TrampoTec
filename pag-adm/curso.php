<?php
require_once "back-end/login/validador_acesso.php";
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
    <link rel="stylesheet" href="css/curso.css">

    <title>Cursos</title>
</head>

<body>
    <?php
    include '../pag-adm/components/sidebar-adm.php';
    ?>
    <img class="cima" src="img/fundo2.png" alt="">
    <header>
        <h1>Etecs</h1>
        <div class="secao-cadastro">
        <a href="cadastro-curso.php">
            <i id="icon-titulo" class="fa-solid fa-plus" style="color: #ffffff;"></i>
            <h2>Cadastrar um novo curso</h2>
        </a>
    </div>
    </header>
    <main>
        <div class="secao-busca">
            <section class="sistema-busca">
                <div class="barra-pesquisa">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                </div>

                <div class="align-filtro">
                    <!--<div class="btn-side">
                        <a href="empresa.php?aprovado=1">
                            <p>CADASTRADAS</p><a>
                    </div>
                    <div class="btn-side">
                        <a href="empresa.php?aprovado=0">
                            <p>PENDENTES</p><a>
                    </div>-->
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

        <section>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="text-align:start">NOME</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="infos">
                        <td class="table-id">
                            1
                        </td>
                        <td style="text-align:start" class="table-nome-curso">
                            Desenvolvimento de sistemas
                        </td>

                        <td class="icone-table">

                            <i class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>
                    <tr class="infos">
                        <td class="table-id">
                            2
                        </td>
                        <td style="text-align:start" class="table-nome-curso">
                            Nutrição e Dietética
                        </td>

                        <td class="icone-table">

                            <i class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>


        </section>
    </main>
    <script src="modal-empresa.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>