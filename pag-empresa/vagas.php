<?php
require_once "./beck-end/login/validador_acesso.php";
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

    <dialog id="vermais" class="ver-mais">
        <div class="vermais-body">
            <span class="ver-fechar"><i onclick="vermais()" class="fa-solid fa-circle-xmark"></i></span>

            <div class="vermais-infos">
                <h3>Periodo:</h3>
                <p>noturno 19:00pm AS 23:00pm  </p>
            </div>

            <div class="vermais-infos">
                <h3>Descricao:</h3>
                <p>TEXTO PARA SABER COMO VAI FICAR </p>
            </div>

            <div class="vermais-infos">
                <h3>Requisito:</h3>
                <p>TEXTO PARA SABER COMO VAI FICAR </p>
            </div>

        </div>
    </dialog>

    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <p>Vagas</p>

        <section class="sistema-busca">
            <div class="secao-busca">

                <sp an class="add-vaga"><a href="./cadastrar-vaga.php"><i class="fa-solid fa-circle-plus"></i></a> Cadastra Nova Vaga</sp>
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

                        <th>EMPRESA</th>
                        <th>CIDADE</th>
                        <th>BAIRRO</th>
                        <th>TIPO TABRALHO</th>
                        <th>SALARIO</th>
                        <th>CURSO</th>
                        <th>AREA</th>
                        <th>INFORMAÇÕES</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="infos">
                        <td class="table">Cysco Systen</td>
                        <td class="table">Sao paulo</td>
                        <td class="table">Itaquera</td>
                        <td class="table">Presencial </td>
                        <td class="table">R$ 2000,00</td>
                        <td class="table">DESENVOLVIMENTO DE SISTEMAS</td>
                        <td class="table">Back-end</td>
                        <td class="table" style="cursor: pointer;color: blue;" onclick="vermais()">VER MAIS</td>
                        <td class="icone-table">
                            <div class="icons">
                                <form>
                                    <a href="./editar-vaga.php"><i class="fa-solid fa-pen-to-square" style="color:grey; "></i></a>
                                    <input type="hidden" value="">
                                    <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
                                </form>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>