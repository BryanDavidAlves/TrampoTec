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
    <link rel='stylesheet' href='../pag-empresa/css/candidatos.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">


    <dialog id="abrir-indicacao">

        <div class="align-card-indicacao">
            <h5 class="title-indicacao">Reagendar Entrevista</h5><br>
            <form class="" action="#">
                <label ">TITULO</label>
                <input type=" text" name="email-professor" id="">

                    <label>HORARIO</label>
                    <input type="date" name="email-professor" id="">

                    <label ">NOME DO ENTREVISTADO</label>
                    <input type=" text" name="email-professor" id="">
                    <button class="botao-indicacao" type="submit">REAGENDAR</button>
        </form>
        </div>

    </dialog>

    <main class="main">

        <p>Perfis de estudantes</p>

        <section class="sistema-busca">
            <div class="secao-busca">


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
                            <label for="">Horario</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Curso</label>
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
                        <th>ENTREVISTA</th>
                        <th>EMAIL</th>
                    </tr>

                </thead>

                <tbody>

                    <tr class="infos">
                        <td class="table-nome-candidato">Bryan David</td>
                        <td class="table-email-candidato">Desenvolvimento de sistemas</td>
                        <td class="table-cnpj">30/03 20:00 horas</td>
                        <td class="table-cnpj">ByranZika123@gmail.com</td>
                        <td class="table-cnpj">
                            <i id="btn1" class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
                            <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
                        </td>
                    </tr>

                    <tr class="infos">
                        <td class="table-nome-candidato">Bryan David</td>
                        <td class="table-email-candidato">Desenvolvimento de sistemas</td>
                        <td class="table-cnpj">30/03 20:00 horas</td>
                        <td class="table-cnpj">ByranZika123@gmail.com</td>
                        <td class="table-cnpj">
                            <i id="btn1" class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
                            <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
                        </td>
                    </tr>

                    <tr class="infos">
                        <td class="table-nome-candidato">Bryan David</td>
                        <td class="table-email-candidato">Desenvolvimento de sistemas</td>
                        <td class="table-cnpj">30/03 20:00 horas</td>
                        <td class="table-cnpj">ByranZika123@gmail.com</td>
                        <td class="table-cnpj">
                            <i id="btn1" class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
                            <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
                        </td>
                    </tr>


                    
                </tbody>


        </section>

    </main>


    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>