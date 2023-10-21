<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';


$querySelect = "SELECT tb_vaga.idVaga, tb_vaga.nome, tb_vaga.cidade, tb_vaga.bairro, tb_vaga.tipoTrabalho, tb_vaga.salario, tb_curso.nome,   tb_vaga.periodo, tb_vaga.area,  tb_vaga.descricao, tb_vaga.inicio, tb_vaga.termino  
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

$info = "SELECT tb_vaga.idVaga, tb_vaga.nome, tb_vaga.descricao , tb_vaga.tipoTrabalho, tb_vaga.salario, tb_empresa.nome AS empresa, tb_empresa.imagem, tb_perfil_empresa.departamento, tb_perfil_empresa.anoFundacao, tb_requisito.requisito
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso
INNER JOIN tb_empresa
ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_perfil_empresa
ON tb_perfil_empresa.fk_idEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_requisito_vaga 
on tb_vaga.idVaga = tb_requisito_vaga.fk_idVaga
INNER JOIN tb_requisito 
ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito";


$result = $conexao->query($info);

$vagas = array();
foreach ($result as $vaga) {
    $vagaId = $vaga['idVaga'];
    if (!isset($vagas[$vagaId])) {
        $vagas[$vagaId] = array(
            'nome' => $vaga['nome'],
            'descricao' => $vaga['descricao'],
            'tipoTrabalho' => $vaga['tipoTrabalho'],
            'salario' => $vaga['salario'],
            'empresa' => $vaga['empresa'],
            'imagem' => $vaga['imagem'],
            'departamento' => $vaga['departamento'],
            'anoFundacao' => $vaga['anoFundacao'],
            'requisito' => $vaga['requisito'],


        );
    }
}



?>


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                                    <h4><?= $resultado[2] ?></h4>
                                    <h4><?= $resultado[3] ?></h4>
                                </div>
                                <h4><?= $resultado[1] ?></h4>
                                <h4><?= $resultado[4] ?></h4>
                                <h4>R$<?= $resultado[5] ?></h4>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    MAIS INFORMAÇÕES
                                </button>

                            </div>
                        <?php  } ?>



                    </div>
                </section>
            </section>
            <!--</div>-->
        </div>
    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>

    <!-- <dialog id="modal">
        <section class="container-modal">
            <div class="header-modal">
                <button id="closeModal">
                    <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                </button>
            </div>
            <section class="info-empresa">
                <section class="info-empresa">
                    <div class="div-img-modal">
                        <img class="img-modal" src="img/nuts.png" alt="">
                    </div>
                    <div class="sobre-empresa">
                        
                        <h2>Nuts</h2>
                        <h3>EmpresaTecnologica</h3>
                        <h4>Desde 2023</h4>
                    </div>
                </section>
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
                    <h2>ESTÁGIO BACK END</h2>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni reiciendis, reprehenderit
                            assumenda aliquid aut alias eligendi delectus harum quisquam maxime voluptates nulla illum.
                            Iste deleniti libero nulla quidem? Ut?</p>
                    </div>
                </section>
            </div>
            <button id="btn" onclick="openModal()">CANDIDATAR-SE</button>
        </section>
    </dialog> -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">INFORMAÇÕES</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php

                    foreach ($vagas as $idVaga => $info) {
                        echo '<img src="' . $vaga['imagem'] . '" alt="Empresa" >';
                        echo  '<p>' .  $vaga['nome'] . '</p>';
                        echo  '<p>' .  $vaga['descricao'] . '</p>';
                        echo  '<p>' .  $vaga['tipoTrabalho'] . '</p>';
                        echo  '<p>' .  $vaga['salario'] . '</p>';
                        echo  '<p>' .  $vaga['empresa'] . '</p>';

                        echo  '<p>' .  $vaga['departamento'] . '</p>';
                        echo  '<p>' .  $vaga['anoFundacao'] . '</p>';
                        echo  '<p>' .  $vaga['requisito'] . '</p>';
                    }
                    ?>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">CANDIDATAR-SE</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="js/modal-vagas.js"></script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function() {
            modal.close()
        }
    </script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>