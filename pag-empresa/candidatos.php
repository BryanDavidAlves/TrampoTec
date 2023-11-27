<?php
include '../dao/conexao.php';
require_once "./beck-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idEmpresa'];

$querySelect = "SELECT tb_aluno.idAluno, tb_aluno_etec.*,tb_etec.*
FROM tb_aluno
INNER JOIN tb_aluno_etec ON tb_aluno_etec.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_etec ON tb_etec.idEtec = tb_aluno_etec.fk_idEtec
WHERE tb_aluno.idAluno = $cliente_id
";
$query = $conexao->query($querySelect);
$aluno = $query->fetchAll();

$querySelect2 = "SELECT tb_conhecimento.*,tb_conhecimento_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_conhecimento_aluno ON tb_conhecimento_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_conhecimento ON tb_conhecimento.idConhecimento = tb_conhecimento_aluno.fk_idConhecimento
WHERE tb_conhecimento_aluno.fk_idAluno = $cliente_id
";
$query2 = $conexao->query($querySelect2);
$aluno2 = $query2->fetchAll();

$querySelect3 = "SELECT tb_aluno.*,tb_habilidade.*,tb_habilidade_aluno.*
FROM tb_aluno
INNER JOIN tb_habilidade_aluno ON tb_habilidade_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_habilidade ON tb_habilidade.idHabilidade= tb_habilidade_aluno.fk_idHabilidade
WHERE tb_habilidade_aluno.fk_idAluno = $cliente_id

";
$query3 = $conexao->query($querySelect3);
$aluno3 = $query3->fetchAll();

$querySelect4 = "SELECT tb_aluno.*,tb_idioma_aluno.*
FROM tb_aluno
INNER JOIN tb_idioma_aluno ON tb_idioma_aluno.fk_idAluno = tb_aluno.idAluno
WHERE tb_aluno.idAluno = $cliente_id
";
$query4 = $conexao->query($querySelect4);
$aluno4 = $query4->fetchAll();

$querySelect5 = "SELECT tb_aluno.idAluno, tb_aluno_curso.*,tb_curso.*
FROM tb_aluno
INNER JOIN tb_aluno_curso ON tb_aluno_curso.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_curso ON tb_curso.idCurso = tb_aluno_curso.fk_idCurso
WHERE tb_aluno.idAluno = $cliente_id
";
$query5 = $conexao->query($querySelect5);
$aluno5 = $query5->fetchAll();

$querySelect6 = "SELECT tb_aluno.idAluno , tb_perfil_aluno.*
FROM tb_aluno
INNER JOIN tb_perfil_aluno ON tb_perfil_aluno.fk_idAluno = tb_aluno.idAluno
WHERE tb_aluno.idAluno = $cliente_id
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
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/candidatos.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include '../pag-empresa/componentes/sidebar.php'?>
    <?php include '../pag-empresa/componentes/email.php'?>
    <?php include '../pag-empresa/componentes/notificacao.php'?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">



        <dialog id="abrir-indicacao">

              <div class="align-card-indicacao" id="dialog">
                <div class="fechar-indicacao" id="btn3">
                <i class="fa-solid fa-xmark"  ></i>
                </div>
                    <div class="imagem-perfil-update">
                    <img src="fotosEmpresa/perfil/8441cc4fbc018b3c121bd94849a55af0.png" alt="">
                    <div class="info1">
                    <p class="nome">Ryan Dias </p>
                    <p class="curso">Instituição: Etec Guainazes </p>
                    </div>
                    </div>

                    <div class="itens-curriculo">
                        <div class="habilidades">
                            <p class="title-habilidades">HABILIDADES</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                        </div>

                        <div class="habilidades">
                            <p class="title-habilidades">IDIOMAS</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                        </div>
                        </div>
                        <div class="itens-curriculo">
                        <div class="habilidades">
                            <p class="title-habilidades">CONHECIMENTOS </p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                        </div>

                        <div class="habilidades">
                            <p class="title-habilidades">CURSOS</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                            <p>.TECNOLOGIA</p>
                        </div>
                        </div>





              </div>


        </dialog>


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
</body>

</html>