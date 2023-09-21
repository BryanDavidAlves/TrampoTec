<?php 
    include('../dao/conexao.php');

$querySelect = "SELECT * FROM  tb_curso";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();
?>


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
        <h1>Cursos</h1>
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
                    <?php foreach($resultado as $resultado) {?>
                    <tr class="infos">
                        <td class="table-id">
                            <?=$resultado[0]?>
                        </td>

                        <td style="text-align:start" class="table-nome-curso">
                        <?=$resultado[1]?>
                        </td>
                        <td class="ver-mais" id="btn1">
                            <span class="btn-modal">Ver Mais</span>
                        </td>
                        <td class="icone-table">

                        <a href="./back-end/crudCurso/delete-curso.php?id=<?=$resultado[0]?>"> <i class="fa-solid fa-x" style="color: #000000;"></i></a>
                        </td>
                    </tr>
                    <?php }  ?>
                    
                </tbody>
            </table>


        </section>
    </main>
    
    <dialog id="modal">
        <section class="modal-infos">
            <table class="table-dialog">
                <thead>
                    <th>Areas</th>
                    <th>Requisitos</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Areas 1</td> 
                        <td>Requisitos 1</td>
                    </tr>

                    <tr>
                        <td>Areas 2</td> 
                        <td>Requisitos 2</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </dialog>
    <script src="modal-curso.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>