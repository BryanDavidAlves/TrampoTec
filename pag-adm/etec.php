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
    <link rel="stylesheet" href="css/etec.css">

    <title>Etecs</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Etecs</h1>
        <input type="text" placeholder="Pesquisar">
    </header>
    <main>

        <section class="etec">
            <div class="align-card">
                <div class="card">
                    <section class="header-card">
                        <div class="part1">
                            <img src="img/img-etec.jpg" alt="">
                            <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                        </div>
                        <h2> TrampoTec</h2>

                    </section>
                    <div class="info-etec">
                        <h3>Localização</h3>
                        <h5>Rua Feliciano Mendonça 290- Guaianases. São Paulo - SP, 08460-365</h5>
                    </div>
                    <div class="info-etec">
                        <h3>Cursos</h3>
                        <h5>Desenvolvimento de sistemas - Tarde <br>
                            Nutrição - Tarde <br>
                            Eletrotécnica - EMTEC <br>
                            Administração - EMTEC <br>
                        </h5>
                    </div>

                    <div class="info-etec">
                        <h3>Telefone</h3>
                        <h5>(11) 2558-2585</h5>
                    </div>

                    <div class="info-etec">
                        <h3>Código</h3>
                        <h5>(11) 99999-9999</h5>
                    </div>

                    <div class="info-etec">
                        <h3>Email</h3>
                        <h5>email@email.com</h5>
                    </div>
                </div>

                <div class="card">
                    <section class="header-card">
                        <div class="part1">
                            <img src="img/img-etec.jpg" alt="">
                            <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                        </div>
                        <h2> TrampoTec</h2>

                    </section>
                    <div class="info-etec">
                        <h3>Localização</h3>
                        <h5>Rua Feliciano Mendonça 290- Guaianases. São Paulo - SP, 08460-365</h5>
                    </div>
                    <div class="info-etec">
                        <h3>Cursos</h3>
                        <h5>Desenvolvimento de sistemas - Tarde <br>
                            Nutrição - Tarde <br>
                            Eletrotécnica - EMTEC <br>
                            Administração - EMTEC <br>
                        </h5>
                    </div>

                    <div class="info-etec">
                        <h3>Telefone</h3>
                        <h5>(11) 2558-2585</h5>
                    </div>

                    <div class="info-etec">
                        <h3>Código</h3>
                        <h5>(11) 99999-9999</h5>
                    </div>

                    <div class="info-etec">
                        <h3>Email</h3>
                        <h5>email@email.com</h5>
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
                        <h3 class="palavra-chave">Curso</h3>
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


        <section class="aluno">

        </section>

    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>