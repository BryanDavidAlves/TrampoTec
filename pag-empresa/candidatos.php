<?php
include '../dao/conexao.php';
require_once "./beck-end/login/validador_acesso.php";

$querySelect0 = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga";

$query = $conexao->query($querySelect0);
$resultado = $query->fetchAll();











$querySelect6 = "SELECT tb_aluno.idAluno , tb_perfil_aluno.*
FROM tb_aluno
INNER JOIN tb_perfil_aluno ON tb_perfil_aluno.fk_idAluno = tb_aluno.idAluno

";
$query6 = $conexao->query($querySelect6);
$aluno6 = $query6->fetchAll();
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

        <?php foreach ($resultado as $resultado) { ?>

            <div class="modal fade" id="exampleModal<?= $resultado[22] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" id="modal">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="itens-curriculo" id="itens-curriculo">
                            <div class="imagem-perfil-update" id="imagem-perfil-update">
                                <img src="../pag-aluno/fotosAluno/perfil/<?= $resultado[35] != "" ? $resultado[35] : ''; ?>" alt="">
                                <div class="info1">

                                    <p class="nome"><?= $resultado[25] ?></p>
                                    <?php 
                                    $querySelect1 = "SELECT tb_aluno.idAluno, tb_aluno.nome, tb_aluno_etec.*,tb_etec.*
                                    FROM tb_aluno
                                    INNER JOIN tb_aluno_etec ON tb_aluno_etec.fk_idAluno = tb_aluno.idAluno
                                    INNER JOIN tb_etec ON tb_etec.idEtec = tb_aluno_etec.fk_idEtec
                                    WHERE tb_aluno.idAluno = $resultado[22]
                                    ";
                                    $query = $conexao->query($querySelect1);
                                    $aluno = $query->fetchAll();
                                    foreach ($aluno as $aluno) { ?>
                                        <p class="curso"><?= $aluno[5] ?> - <?= $aluno[8] ?></p>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="habilidades" id="habilidades">
                                <div class="itens-habilidades">
                                    <p class="title-habilidades"> CURSOS</p>
                                    <?php 
                                    $querySelect5 = "SELECT tb_aluno.idAluno, tb_aluno_curso.*,tb_curso.*
                                    FROM tb_aluno
                                    INNER JOIN tb_aluno_curso ON tb_aluno_curso.fk_idAluno = tb_aluno.idAluno
                                    INNER JOIN tb_curso ON tb_curso.idCurso = tb_aluno_curso.fk_idCurso
                                    WHERE tb_aluno.idAluno = $resultado[22]
                                    ";
                                    $query5 = $conexao->query($querySelect5);
                                    $aluno5 = $query5->fetchAll();
                                    foreach ($aluno5 as $aluno5) { ?><p class="itens"><?= $aluno5[4] ?> - <?= $aluno5[5] ?> Horas </p>
                                    <?php } ?>
                                </div>

                                <div class="itens-habilidades">
                                    <p class="title-habilidades"> CONHECIMENTOS</p>
                                    <?php
                                    $querySelect2 = "SELECT tb_conhecimento.*,tb_conhecimento_aluno.* , tb_aluno.*
                                    FROM tb_aluno
                                    INNER JOIN tb_conhecimento_aluno ON tb_conhecimento_aluno.fk_idAluno = tb_aluno.idAluno
                                    INNER JOIN tb_conhecimento ON tb_conhecimento.idConhecimento = tb_conhecimento_aluno.fk_idConhecimento
                                    WHERE tb_aluno.idAluno = $resultado[22]
                                    ";
                                    $query2 = $conexao->query($querySelect2);
                                    $aluno2 = $query2->fetchAll();
                                    foreach ($aluno2 as $aluno2) { ?>
                                        <p class="itens"> <?= $aluno2[1] ?></p>
                                    <?php } ?>
                                </div>
                            </div>



                            <div class="habilidades" id="habilidades">
                                <div class="itens-habilidades">
                                    <p class="title-habilidades"> HABILIDADES</p>
                                    <?php
                                    $querySelect3 = "SELECT tb_aluno.*,tb_habilidade.*,tb_habilidade_aluno.*
                                    FROM tb_aluno
                                    INNER JOIN tb_habilidade_aluno ON tb_habilidade_aluno.fk_idAluno = tb_aluno.idAluno
                                    INNER JOIN tb_habilidade ON tb_habilidade.idHabilidade= tb_habilidade_aluno.fk_idHabilidade
                                    WHERE tb_aluno.idAluno = $resultado[22]
                                    ";
                                    $query3 = $conexao->query($querySelect3);
                                    $aluno3 = $query3->fetchAll();
                                    foreach ($aluno3 as $aluno3) { ?>
                                        <p class="itens"> <?= $aluno3[16] ?> </p>
                                    <?php } ?>
                                </div>


                                <div class="itens-habilidades">
                                    <p class="title-habilidades"> IDIOMAS</p>
                                    <?php 
                                    $querySelect4 = "SELECT tb_aluno.*,tb_idioma_aluno.*
                                    FROM tb_aluno
                                    INNER JOIN tb_idioma_aluno ON tb_idioma_aluno.fk_idAluno = tb_aluno.idAluno
                                    WHERE tb_aluno.idAluno = $resultado[22]
                                    ";
                                    $query4 = $conexao->query($querySelect4);
                                    $aluno4 = $query4->fetchAll();
                                    foreach ($aluno4 as $aluno4) { ?>
                                        <p class="itens"><?= $aluno4[16] ?> - <?= $aluno4[17] ?></em></p>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

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