<?php
include '../dao/conexao.php';
require_once "./beck-end/login/validador_acesso.php";

$querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/candidatos.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include '../pag-empresa/componentes/sidebar.php' ?>



    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">




    <main class="main">

        <p>Perfis de estudantes</p>

        <section class="sistema-busca">
            <div class="secao-busca">


                <div class="barra-pesquisa">
                    <input type="text" name="busca" id="busca" placeholder="buscar por aluno">
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
                            <label for="">Data</label>
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
        </section>


        <section class="candidato">

            <table>
                <thead>
                    <tr>

                        <th>NOME</th>
                        <th>VAGA</th>

                        <th>EMAIL</th>
                        <th>CURRICULO</th>

                    </tr>

                </thead>

                <tbody class="infos" id="result">


                </tbody>
                </section>

           <?php      foreach ($resultado as $resultado) { ?>
     
                <div class="modal fade bd-example-modal-lg" id="staticBackdrop<?=$resultado[19]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Vaga: <?=$resultado[1]?>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
         
                
                    <div class="imagem-perfil-update" id="imagem-perfil-update">
                        <img src="fotosEmpresa/perfil/2cd93350824a7e4e94b21b312ec4ca79.png" alt="">
                        <div class="info1">
                            <p class="nome">Ryan Dias</p>
                            <p class="curso">Instituição: Etec Guainazes</p>
                        </div>
                    </div>
                    <div id="modal-body" class="modal-body">
                        <div class="itens-curriculo" id="itens-curriculo">
                            <div class="habilidades" id="habilidades">
                            <p class="title-habilidades"> HABILIDADES</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            </div>
                            <div class="habilidades" id="habilidades">
                            <p class="title-habilidades"> HABILIDADES</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            </div>
                        

                        
                            <div class="habilidades" id="habilidades">
                            <p class="title-habilidades"> HABILIDADES</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            </div>
                            <div class="habilidades" id="habilidades">
                            <p class="title-habilidades"> HABILIDADES</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            <p class=""> .TECNOLOGIA</p>
                            </div>
                            </div>
                            
            </div>
        </div>
    </div>
                </div>

    <?php   } ?>
       
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var busca = ("");
            $.post('./beck-end/buscaAluno/buscaAluno.php', {
                busca
            }, function(data) {
                $("#result").html(data);
            });


            $("#busca").keyup(function() {

                busca = $("#busca").val();
                $.post('./beck-end/buscaAluno/buscaAluno.php', {
                    busca: busca
                }, function(data) {
                    $("#result").html(data);
                });


            });
        });
    </script>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>