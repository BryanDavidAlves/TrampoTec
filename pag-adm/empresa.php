<?php
require_once "back-end/login/validador_acesso.php";

include '../dao/conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">

    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/empresa.css">

    <title>Empresas</title>
</head>

<body>
    <?php
    include '../pag-adm/components/sidebar-adm.php';
    ?>
    <img class="cima" src="img/fundo2.png" alt="">
    <header>
        <h1>Empresas</h1>
    </header>
    <main>
        <div id="loading">
            <img src="img/loading.gif" alt="Carregando"> <!-- Use uma imagem de loading ou outra animação -->
            <p>Carregando...</p>
        </div>
        <section id="content">
            <div class="secao-busca">
                <section class="sistema-busca">
                    <div class="barra-pesquisa">
                        <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                        <input type="text" id="busca" placeholder="buscar por empresa">
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
                </section>>
            </div>


            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>CNPJ</th>
                        <th>CEP</th>
                        <th>ESTADO</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody class="infos" id="result">

                </tbody>
            </table>


        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            <?php if (isset($_GET['aprovado']) && $_GET['aprovado'] == "1") { ?>

                var busca = ("");
                $.post('./back-end/buscas/buscaEmpresa1.php', {
                    busca
                }, function(data) {
                    $("#result").html(data);
                });


                $("#busca").keyup(function() {

                    busca = $("#busca").val();
                    $.post('./back-end/buscas/buscaEmpresa1.php', {
                        busca: busca
                    }, function(data) {
                        $("#result").html(data);
                    });


                });
            <?php } ?>
            <?php if (isset($_GET['aprovado']) && $_GET['aprovado'] == "0") { ?>

                var busca = ("0");
                $.post('./back-end/buscas/buscaEmpresa.php', {
                    busca
                }, function(data) {
                    $("#result").html(data);
                });


                $("#busca").keyup(function() {

                    busca = $("#busca").val();
                    $.post('./back-end/buscas/buscaEmpresa.php', {
                        busca: busca
                    }, function(data) {
                        $("#result").html(data);
                    });


                });
            <?php } ?>
        });
    </script>
    <script src="js/modal-empresa.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script >
        document.addEventListener("DOMContentLoaded", function() {
    // Simular um carregamento de 2 segundos
    setTimeout(function() {
        // Oculta a tela de carregamento
        document.getElementById("loading").style.display = "none";

        // Exibe a tela de conteúdo
        document.getElementById("content").style.display = "block";
    }, 2000); // Tempo de espera em milissegundos
})
    </script>
</body>

</html>