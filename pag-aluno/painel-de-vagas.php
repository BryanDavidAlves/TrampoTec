<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idAluno'];

if (!($_GET)) {
    $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*

    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";
} else if ($_GET['periodo'] == "qualquer" && $_GET['salario'] == "qualquer" && $_GET['area'] == "qualquer" && $_GET['curso'] == "qualquer") {

    $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*
    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";
} else {
    $periodo = trim($_GET['periodo']);
    $curso = trim($_GET['curso']);
    $area = trim($_GET['area']);
    $salario = trim($_GET['salario']);

    $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*
    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito WHERE tb_vaga.periodo = '$periodo' OR tb_curso.nome = '$curso'
    OR tb_vaga.area = '$area' OR  tb_vaga.salario BETWEEN 0 AND '$salario'
    ";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    <title>Pagina de Vagas</title>
</head>

<body>
    <?php
include '../pag-aluno/components/header.php';

?>

    <main id="main">

        <div class="box">
            <h1>PAINEL DE VAGAS</h1>
            <!-- <div class="control">-->

            <section class="filtro">
                <form method="get">
                    <span class="icone-filtro">
                        <i class="fa-solid fa-sliders" style="color: #0a3580;"></i>
                        <h4>Filtrar por</h4>
                    </span>

                    <span class="option-filter">
                        <label for="periodo">Período:</label>
                        <select name="periodo" id="periodo">
                            <option value="qualquer">Qualquer</option>
                            <option value="matinal">Manhã</option>
                            <option value="diurno">Tarde</option>
                            <option value="noturno">Noite</option>
                            <option value="">Integral</option>
                        </select>
                    </span>

                    <span class="option-filter">
                        <label>Curso:</label>
                        <select class="option-curso" name="curso" id="curso">
                            <option value="qualquer">Qualquer</option>
                            <option value="desenvolvimento">Desenvolvimento de Sistemas</option>
                            <option value="administracao">Administração</option>
                            <option value="nutricao">Nutrição</option>
                            <option value="eletro">Eletrotecnica</option>
                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Área:</label>
                        <select name="area" id="area">
                            <option value="qualquer">Qualquer</option>
                            <option value="tecnologia">Tecnologia</option>

                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Salário:</label>
                        <select name="salario" id="salario">
                            <option value="qualquer">Qualquer</option>
                            <option value="1000"> 1000,00 R$</option>
                            <option value="1500">1000,00 R$ - 1500,00 R$</option>
                            <option value="2000">1500,00 R$ - 2000,00 R$</option>
                        </select>
                    </span>
                    <input class="btn-filtro" type="submit">
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
                        <?php foreach ($resultado as $resultado) {?>
                            <div class="cards">
                                <div class="localidade">

                                </div>
                                <h4>
                                    <?=$resultado[23]?> -
                                    <?=$resultado[9]?>
                                </h4>
                                <h4>
                                    <?=$resultado[24]?>
                                </h4>
                                <h4>
                                    <?=$resultado[25]?>
                                </h4>
                                <h4>R$
                                    <?=$resultado[26]?>
                                </h4>


                                <button id="btn1">Clique para mais informações</button>

                            </div>
                            <dialog id="modal">
                            <form action="./back-end/salvarCandidato/salvar-candidato.php" method="POST" >
                                <section class="container-modal">
                                    <div class="header-modal">
                                        <button id="closeModal">
                                            <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                                        </button>
                                    </div>
                                    <section class="info-empresa">
                                        <div class="div-img-modal">


                                            <a><img class="img-modal"
                                                    src="../pag-empresa/fotosEmpresa/perfil/<?=$resultado[13]?>"></a>


                                        </div>
                                        <div class="sobre-empresa">
                                            <h2>
                                                <?=$resultado[3]?>
                                            </h2>
                                            <h3>
                                                <?=$resultado[13]?>
                                            </h3>
                                            <h4>Desde
                                                <?=$resultado[15]?>
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
                                                <?=$resultado[31]?>
                                            </h2>
                                            <div>
                                                <p>
                                                    <?=$resultado[27]?>
                                                </p>
                                            </div>
                                        </section>
                                    </div>
                                    <input type="hidden" id="idVaga" name="idVaga" value="<?=$resultado[18]?>">
                                    <button name="bnt" id="btn" type="submit" value="<?=$cliente_id?>" >CANDIDATAR-SE</button>
                                    </form>
                                </section>
                            </dialog>



                        <?php }?>

        </div>
        </section>



    </main>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script>
        var btn = document.getElementById('btn')


        var button1 = document.getElementById("btn1")
        var button2 = document.getElementById("btn2")
        var button3 = document.getElementById("btn3")
        var modal = document.getElementById("modal")

        button1.onclick = function() {
            modal.showModal()
        }
        button2.onclick = function() {
            modal.showModal()
        }
        button3.onclick = function() {
            modal.showModal()
        }
    </script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function() {
            modal.close()
        }
    </script>
</body>

</html>