<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";


$querySelect ="SELECT tb_vaga.idVaga, tb_vaga.nome, tb_vaga.cidade, tb_vaga.bairro, tb_vaga.tipoTrabalho, tb_vaga.salario, tb_curso.nome,   tb_vaga.periodo, tb_vaga.area,  tb_vaga.descricao, tb_vaga.inicio, tb_vaga.termino  
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();






?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>
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
                    Cadastrar Nova Vaga</sp>
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
                            <?= $resultado[6] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[8] ?>
                            </td>
                            <td class="table">
                                <?= $resultado[7] ?>
                            </td>
                            


                            <td class="table" style="cursor: pointer;color: blue;" onclick="vermais()">VER MAIS</td>

                            <td class="icone-table">
                                <div class="icons">
                                    <form>
                                    <input type="hidden" class="form-control" id="id_curso" name="id_curso"
                        value=<?= $resultado[0]?>>
                    <button type="submit" class="dropdown-item"><i
                            class="fas fa-edit fa-lg text-secondary"></i>
                    </button>
                                        <input type="hidden" value="">

                                    </form>
                            <td class="icone-table">

                                <a href="./beck-end/crudVaga/vaga-delete.php?id=<?= $resultado[0] ?>"> <i
                                        class="fa-solid fa-x" style="color: #000000;"></i></a>
                            </td>
                            </div>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </section>



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>