<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>
    <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <title>TrampoTec</title>
</head>

<body>


    <?php include '../pag-empresa/componentes/sidebar.php'?>
    <?php include '../pag-empresa/componentes/email.php'?>
    <?php include '../pag-empresa/componentes/notificacao.php'?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <p>Vagas</p>

        <section class="sistema-busca">
            <div class="secao-busca">

                <span an class="add-vaga"><a href="./cadastrar-vaga.php"><i class="fa-solid fa-circle-plus"></i></a>
                    Cadastra Nova Vaga</span>
                <div class="barra-pesquisa">
                    <input type="text" name="pesquisa" id="busca" placeholder="Buscar por vaga">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                </div>

                <div class="align-filtro">
                    <!--
                    <div class="filtro" onclick="abrirFiltro()">
                        <i class="fa-solid fa-filter"></i>
                        <span>Filtrar</span>

                    </div>
-->
                </div>

                <div class="modal-filtro" id="abrir-filtro">
                    <form action="">
                        <div class="align-form-filtro">
                            <label for="">Periodo</label>
                            <input type="checkbox" name="" id="">
                        </div>

                        <div class="align-form-filtro">
                            <label for="">Salario</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Vaga</label>
                            <input type="checkbox" name="" id="">
                        </div>

                        <input type="submit" value="Aplicar" class="button-filtro">

                    </form>
                </div>
            </div>
        </section>

        <section class="section-vagas">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>VAGA</th>
                        <th>CIDADE</th>
                        <th>BAIRRO</th>
                        <th>AREA</th>
                        <th>PERIODO</th>
                        <th>CANDIDATOS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="infos" id="result">

                </tbody>
            </table>

        </section>

        <!--   <?php foreach ($vagas as $vaga) {?>

            <div class="modal fade" id="modal-<?=$vaga['idVaga']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">INFORMAÇÕES DA VAGA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span>
                                <h5>Nome da empresa:</h5><?=$vaga['empresa']?>
                            </span>
                            <span>
                                <h5>Departamento :</h5> <?=$vaga['departamento']?>
                            </span>
                            <span>
                                <h5>Requisitos:</h5> <?=$vaga['requisito']?>
                            </span>
                            <span>
                                <h5>Nome da vaga:</h5><?=$vaga['nome']?>
                            </span>
                            <span>
                                <h5>Descrição da vaga:</h5><?=$vaga['descricao']?>
                            </span>
                            <span>
                                <h5>Cursos da vaga:</h5><?=$vaga['curso']?>
                            </span>
                            <span>
                                <h5>Tipo de trabalho:</h5><?=$vaga['tipoTrabalho']?>
                            </span>
                            <span>
                                <h5>Salario:</h5><?=$vaga['salario']?>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        <?php }?>  -->

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var busca = ("");
            $.post('./beck-end/buscaVaga/buscaVaga.php', {
                busca
            }, function(data) {
                $("#result").html(data);
            });


            $("#busca").keyup(function() {

                busca = $("#busca").val();
                $.post('./beck-end/buscaVaga/buscaVaga.php', {
                    busca: busca
                }, function(data) {
                    $("#result").html(data);
                });


            });
        });

        </script>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>