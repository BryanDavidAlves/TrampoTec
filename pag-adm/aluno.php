<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/aluno.css">
    <title>Document</title>
</head>

<body>
    <img class="cima" src="img/fundo2.png" alt="">
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Alunos</h1>
    </header>
    <main>
        <div class="secao-busca">
            <section class="sistema-busca">
                <div class="barra-pesquisa">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                </div>

                <div class="align-filtro">
                    <div class="filtro" onclick="abrirFiltro()">
                        <span class="material-symbols-outlined">
                            tune
                        </span>
                        <p>Filtrar</p>

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
        <section class="aluno">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL INSTITUICIONAL</th>
                        <th>DATA NASCIMENTO</th>
                        <th>CPF</th>
                        <th>INSTITUIÇÃO</th>
                        <th>CEP</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="infos">
                        <td class="table-id">1</td>
                        <td class="table-nome-aluno">vanessa</td>
                        <td class="table-email-aluno">vanessa@etec.sp.gov.br</td>
                        <td class="text-center">20/02/2000</td>
                        <td class="text-center">155.155.155-74</td>
                        <td class="text-center">Etec Guaianases</td>
                        <td class="text-center">432553535</td>
                        <td class="text-center">SP</td>
                        <td class="icone-table"><i class="fa-solid fa-check" style="color: #ff0000;"></i> <i
                                class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>
                    <tr class="infos">
                        <td class="table-id">2</td>
                        <td class="table-nome-aluno">bryan</td>
                        <td class="table-email-aluno">bryan.alves5@etec.sp.gov.br</td>
                        <td class="text-center">20/02/2000</td>
                        <td class="text-center">155.155.155-74</td>
                        <td class="text-center">Etec Guaianases</td>
                        <td class="text-center">432553535</td>
                        <td class="text-center">SP</td>
                        <td class="icone-table"><i class="fa-solid fa-check" style="color: #ff0000;"></i> <i
                                class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>
                    <tr class="infos">
                        <td class="table-id">3</td>
                        <td class="table-nome-aluno">vanessa</td>
                        <td class="table-email-aluno">vanessa@etec.sp.gov.br</td>
                        <td class="text-center">20/02/2000</td>
                        <td class="text-center">155.155.155-74</td>
                        <td class="text-center">Etec Guaianases</td>
                        <td class="text-center">432553535</td>
                        <td class="text-center">SP</td>
                        <td class="icone-table"><i class="fa-solid fa-check" style="color: #ff0000;"></i> <i
                                class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>
    </main>
    <script src="modal-aluno.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>