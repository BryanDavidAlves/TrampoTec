<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/adm.css">

    <title>Administradores</title>
</head>

<body>
    <img class="cima" src="img/fundo2.png" alt="">
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Administradores</h1>
    </header>
    <div class="secao-cadastro">
        <a href="cadastro-adm.php">
            <i id="icon-titulo" class="fa-solid fa-plus" style="color: #ffffff;"></i>
            <h2>Cadastrar um novo Administrador</h2>
        </a>
    </div>
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
        <section class="adm">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL INSTITUICIONAL</th>
                        <th>SENHA</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="infos">
                        <td class="table-id">1</td>
                        <td class="table-nome-adm">Bryan</td>
                        <td class="table-email-adm">bryansalvinoalves@gmail.com</td>
                        <td class="table-cnpj">832959432432</td>
                        <td class="icone-table"><i class="fa-solid fa-check" style="color: #ff0000;"></i> <i
                                class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>

                    <tr class="infos">
                        <td class="table-id">1</td>
                        <td class="table-nome-adm">Bryan</td>
                        <td class="table-email-adm">bryansalvinoalves@gmail.com</td>
                        <td class="table-cnpj">832959432432</td>
                        <td class="icone-table"><i class="fa-solid fa-check" style="color: #ff0000;"></i> <i
                                class="fa-solid fa-x" style="color: #000000;"></i>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>
    </main>
    <script src="modal-adm.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>
<script src="modal-adm.js"></script>
<script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>