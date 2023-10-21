<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";


$querySelect = "SELECT * FROM  tb_vaga ";
$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

$querySelect = "SELECT * FROM  tb_vaga ";
$query = $conexao->query($querySelect);
$resultados = $query->fetchAll();


$info = "SELECT tb_vaga.idVaga, tb_vaga.nome, tb_vaga.descricao , tb_vaga.tipoTrabalho, tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem, tb_perfil_empresa.departamento, tb_perfil_empresa.anoFundacao, tb_requisito.requisito
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
            'curso' => $vaga['curso'],
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <p>Vagas</p>

        <section class="sistema-busca">
            <div class="secao-busca">

                <sp an class="add-vaga"><a href="./cadastrar-vaga.php"><i class="fa-solid fa-circle-plus"></i></a>
                    Cadastra Nova Vaga</sp>
                <div class="barra-pesquisa">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                </div>

                <div class="align-filtro">
                    <div class="filtro" onclick="abrirFiltro()">
                        <i class="fa-solid fa-filter"></i>
                        <span>Filtrar</span>

                    </div>
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
                        <th>NOME VAGA</th>
                        <th>CIDADE</th>
                        <th>BAIRRO</th>
                        <th>TIPO TABRALHO</th>
                        <th>SALARIO</th>
                        <th>CURSO</th>
                        <th>AREA</th>
                        <th>PERIODO</th>
                        <th>INFORMAÇÕES</th>
                        <th></th>
                    </tr>
                </thead>
                <?php foreach ($resultado as $resultado) { ?>

                    <dialog id="vermais" class="ver-mais">

                        <div class="vermais-body">
                            <span class="ver-fechar"><i onclick="vermais()" class="fa-solid fa-circle-xmark"></i></span>
                            <div class="vermais-align">

                                <div class="vermais-infos">
                                    <h3>Descricao:</h3>
                                    <p id="descricao">

                                    </p>
                                </div>

                                <div class="vermais-infos">
                                    <h3>Requisito:</h3>

                                    <p>

                                    </p>
                                </div>



                            </div>


                        </div>
                    </dialog>

                    <tbody>

                        <tr class="infos">
                            <td class="table">
                                <?= $resultado[0] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[1] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[2] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[3] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[4] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[5] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[10] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[10] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[9] ?>
                            </td>



                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                VER INFORMAÇÕES
                                </button></td>

                            <td class="icone-table">
                                <div class="icons">
                                    <form>
                                        <a href="./editar-vaga.php"><i class="fa-solid fa-pen-to-square" style="color:grey; "></i></a>
                                        <input type="hidden" value="">

                                    </form>
                            <td class="icone-table">

                                <a href="./beck-end/crudVaga/vaga-delete.php?id=<?= $resultado[0] ?>"> <i class="fa-solid fa-x" style="color: #000000;"></i></a>
                            </td>
                            </div>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>
            </table>

        </section>

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
                            
                            echo  '<p>' .  $vaga['nome'] . '</p>';
                            echo  '<p>' .  $vaga['descricao'] . '</p>';
                            echo  '<p>' .  $vaga['curso'] . '</p>';
                            echo  '<p>' .  $vaga['tipoTrabalho'] . '</p>';
                            echo  '<p>' .  $vaga['salario'] . '</p>';
                            echo  '<p>' .  $vaga['empresa'] . '</p>';

                            echo  '<p>' .  $vaga['departamento'] . '</p>';
                            echo  '<p>' .  $vaga['anoFundacao'] . '</p>';
                            echo  '<p>' .  $vaga['requisito'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>