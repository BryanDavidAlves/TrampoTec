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
    <link rel="stylesheet" href="css/professores.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Professores</h1>
        <input type="text" placeholder="Pesquisar">
    </header>
    <main>
        <section class="professor">
            <div class="align-card">
                <div class="card">
                    <section class="header-card">
                        <div class="part1">
                            <img src="img/professor.jpg" alt="">
                            <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                        </div>
                        <h2> Vanessa</h2>

                    </section>
                    <div class="info-professor">
                        <h3>E-mail institucional</h3>
                        <h5>Vanessa123@etec.sp.gov.br</h5>
                    </div>
                    <div class="info-professor">
                        <h3>Codigo etec</h3>
                        <h5>118</h5>
                    </div>

                    <div class="info-professor">
                        <h3>Disciplinas</h3>
                        <h5>PA - Programação e Algoritmos</h5>
                    </div>
                </div>
                <div class="card">
                    <section class="header-card">
                        <div class="part1">
                            <img src="img/professor.jpg" alt="">
                            <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                        </div>
                        <h2> Vanessa</h2>

                    </section>
                    <div class="info-professor">
                        <h3>E-mail institucional</h3>
                        <h5>Vanessa123@etec.sp.gov.br</h5>
                    </div>
                    <div class="info-professor">
                        <h3>Codigo etec</h3>
                        <h5>118</h5>
                    </div>

                    <div class="info-professor">
                        <h3>Disciplinas</h3>
                        <h5>PA - Programação e Algoritmos</h5>
                    </div>
                </div>
                <div class="card">
                    <section class="header-card">
                        <div class="part1">
                            <img src="img/professor.jpg" alt="">
                            <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                        </div>
                        <h2> Vanessa</h2>

                    </section>
                    <div class="info-professor">
                        <h3>E-mail institucional</h3>
                        <h5>Vanessa123@etec.sp.gov.br</h5>
                    </div>
                    <div class="info-professor">
                        <h3>Codigo etec</h3>
                        <h5>118</h5>
                    </div>

                    <div class="info-professor">
                        <h3>Disciplinas</h3>
                        <h5>PA - Programação e Algoritmos</h5>
                    </div>
                </div>
            </div>
            <section class="filtro">
                <div class="align">
                    <span class="material-symbols-outlined">
                        tune
                    </span>
                    <h3 class="titulo-filtro">Filtrar por</h3>
                </div>
                <form action="">
                    <div class="align">
                        <h3 class="palavra-chave">Nome</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                    <div class="align">
                        <h3 class="palavra-chave">Email</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                    <div class="align">
                        <h3 class="palavra-chave">Código Etec</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                    <div class="align">
                        <h3 class="palavra-chave">Disciplina</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                    <input value="Aplicar" class="button" type="submit">
                </form>
                </div>
            </section>

        </section>

    </main>
    <script src="modal-professor.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>