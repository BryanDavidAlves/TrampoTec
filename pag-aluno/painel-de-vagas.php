<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';


$querySelect = "SELECT tb_empresa.* , tb_perfil_empresa.* , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*
FROM tb_empresa
INNER JOIN tb_perfil_empresa ON tb_perfil_empresa.fk_idEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();








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
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    <title>Pagina de Vagas</title>
</head>

<body>
    <img class="cima-esquerda" src="img/icon4.png" alt="">
    <img class="cima-direita" src="img/icon2.png" alt="">
    <!--
    <img class="baixo-direita" src="img/icon1.png" alt="">
    <img class="baixo-esquerda" src="img/icon5.png" alt="">
    -->
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
            <h1>PAINEL DE VAGAS</h1>
            <!-- <div class="control">-->

            <section class="filtro">
                <form action="">
                    <span class="icone-filtro">
                        <i class="fa-solid fa-sliders" style="color: #0a3580;"></i>
                        <h4>Filtrar por</h4>
                    </span>

                    <span class="option-filter">
                        <label for="periodo">Período:</label>
                        <select name="periodo" id="periodo">
                            <option selected value="">Qualquer</option>
                            <option value="">Manhã</option>
                            <option value="">Tarde</option>
                            <option value="">Noite</option>
                        </select>
                    </span>
                    <!--<span class="option-filter">
                            <label>Horário</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>-->
                    <span class="option-filter">
                        <label>Curso:</label>
                        <select class="option-curso" name="" id="">
                            <option selected value="">Qualquer</option>
                            <option value="">Desenvolvimento de Sistemas</option>
                            <option value="">Administração</option>
                            <option value="">Nutrição</option>
                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Área:</label>
                        <select name="" id="">
                            <option selected value="">Qualquer</option>
                            <option value="">Area 1</option>
                            <option value="">Area 2</option>
                            <option value="">Area 3</option>
                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Salário:</label>
                        <select name="" id="">
                            <option selected value="">Qualquer</option>
                            <option value="">500,00 R$ - 1000,00 R$</option>
                            <option value="">1000,00 R$ - 1500,00 R$</option>
                            <option value="">1500,00 R$ - 2000,00 R$</option>
                        </select>
                    </span>
                    <input class="btn-filtro" type="submit" name="" id="">
                </form>
            </section>
            <section class="container">
                <section class="perfil">
                    <div class="div-img">
                        <img src="img/aluno-form.png" alt="">
                    </div>
                    <a href="perfil.php">PERFIL</a>
                </section>


                <section class="vagas">
                    <div class="align-cards">
                        <?php foreach ($resultado as $resultado) { ?>
                            <div class="cards">
                                <div class="localidade">

                                </div>
                                <h4>
                                    <?= $resultado[23] ?> -
                                    <?= $resultado[9] ?>
                                </h4>
                                <h4>
                                    <?= $resultado[24] ?>
                                </h4>
                                <h4>
                                    <?= $resultado[25] ?>
                                </h4>
                                <h4>R$
                                    <?= $resultado[26] ?>
                                </h4>


                                <button id="btn1">Clique para mais informações</button>

                            </div>
                            <dialog id="modal">

                                <section class="container-modal">
                                    <div class="header-modal">
                                        <button id="closeModal">
                                            <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                                        </button>
                                    </div>
                                    <section class="info-empresa">
                                        <div class="div-img-modal">


                                            <a><img class="img-modal"
                                                    src="../pag-empresa/fotosEmpresa/perfil/<?= $resultado[10] ?>"></a>


                                        </div>
                                        <div class="sobre-empresa">
                                            <h2>
                                                <?= $resultado[3] ?>
                                            </h2>
                                            <h3>
                                                <?= $resultado[13] ?>
                                            </h3>
                                            <h4>Desde
                                                <?= $resultado[15] ?>
                                            </h4>
                                        </div>
                                    </section>
                                    <div class="sobre-vaga">
                                        <section class="conhecimento">
                                            <h2>CONHECIMENTOS</h2>
                                            <ul>
                                                <li>JAVA</li>
                                                <li>PHP</li>
                                                <li>HTML</li>
                                            </ul>
                                        </section>
                                        <section class="desc-vaga">
                                            <h2>
                                                <?= $resultado[31] ?>
                                            </h2>
                                            <div>
                                                <p>
                                                    <?= $resultado[27] ?>
                                                </p>
                                            </div>
                                        </section>
                                    </div>
                                    <button id="btn" onclick="openModal()">CANDIDATAR-SE</button>
                                </section>
                            </dialog>



                        <?php } ?>

                    </div>
                </section>


            </section>

            <!--</div>-->
        </div>
    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>



    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script>
        var btn = document.getElementById('btn')

        function openModal() {
            alert('Você se cadastrou na vaga')
            console.log(1)
        }

        var button1 = document.getElementById("btn1")
        var button2 = document.getElementById("btn2")
        var button3 = document.getElementById("btn3")
        var modal = document.getElementById("modal")

        button1.onclick = function () {
            modal.showModal()
        }
        button2.onclick = function () {
            modal.showModal()
        }
        button3.onclick = function () {
            modal.showModal()
        }
    </script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function () {
            modal.close()
        }
    </script>
</body>

</html>