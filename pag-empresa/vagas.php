<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";


$info = "SELECT tb_vaga.cidade, tb_vaga.area, tb_vaga.periodo, tb_vaga.bairro, tb_vaga.idVaga, tb_vaga.nome, tb_vaga.descricao , tb_vaga.tipoTrabalho, tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem, tb_perfil_empresa.departamento, tb_perfil_empresa.anoFundacao, tb_requisito.requisito
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
            'cidade' => $vaga['cidade'],
            'idVaga' => $vaga['idVaga'],
            'bairro' => $vaga['bairro'],
            'area' => $vaga['area'],
            'periodo' => $vaga['periodo'],

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>TrampoTec</title>
</head>

<body>

    <?php include '../pag-empresa/componentes/sidebar.php' ?>
    <?php include '../pag-empresa/componentes/email.php' ?>
    <?php include '../pag-empresa/componentes/notificacao.php' ?>


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
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vagas as $vaga) { ?>
                        <tr class="infos">
                            <td>
                                <?= $vaga['idVaga'] ?>
                            </td>
                            <td>
                                <?= $vaga['nome'] ?>
                            </td>
                            <td>
                                <?= $vaga['cidade'] ?>
                            </td>
                            <td>
                                <?= $vaga['bairro'] ?>
                            </td>
                            <td>
                                <?= $vaga['tipoTrabalho'] ?>
                            </td>
                            <td>
                                <?= $vaga['salario'] ?>
                            </td>
                            <td>
                                <?= $vaga['curso'] ?>
                            </td>
                            <td>
                                <?= $vaga['area'] ?>
                            </td>
                            <td>
                                <?= $vaga['periodo'] ?>
                            </td>

                            <td>
                                <a style="color: blue; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal-<?= $vaga['idVaga'] ?>"> VER MAIS </a>
                            </td>

                            <td class="icone-table">

                                <form>
                                    <a href="./editar-vaga.php"><i class="fa-solid fa-pen-to-square" style="color:grey; "></i></a>
                                </form>


                                <a href="./beck-end/crudVaga/vaga-delete.php?id=<?= $vaga['idVaga'] ?>"> <i class="fa-solid fa-x" style="color: #000000;"></i></a>


                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </section>

        <?php foreach ($vagas as $vaga) { ?>

            <div class="modal fade" id="modal-<?= $vaga['idVaga'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">INFORMAÇÕES DA VAGA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <span> <h5>Nome da empresa:</h5><?= $vaga['empresa'] ?></span>
                            <span> <h5>Departamento :</h5> <?= $vaga['departamento'] ?></span>
                            <span> <h5>Requisitos:</h5> <?= $vaga['requisito'] ?></span>
                            <span><h5>Nome da vaga:</h5><?= $vaga['nome'] ?></span>
                            <span> <h5>Descrição da vaga:</h5><?= $vaga['descricao'] ?></span>
                            <span> <h5>Cursos da vaga:</h5><?= $vaga['curso'] ?></span>
                            <span> <h5>Tipo de trabalho:</h5><?= $vaga['tipoTrabalho'] ?></span>
                            <span> <h5>Salario:</h5><?= $vaga['salario'] ?></span>
                 
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!--   
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
    -->



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>