<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    <title>Pagina de Vagas</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
            <h1>PAINEL DE VAGAS</h1>
            <div class="control">
                <section class="secao-perfil">
                    <img class="img-perfil" src="img/img-perfil.jpg" alt="">
                    <h2><a href="perfil.php">PERFIL</a></h2>
                    <section class="filtro">
                        <div class="filtro-header">
                            <span id="icon-filtro" class="material-symbols-outlined">
                                tune
                            </span>
                            <h3 class="titulo-filtro">Filtrar por </h3>
                        </div>
                        <form action="">
                            <div class="align">
                                <h3 class="palavra-chave">Periodo:</h3>
                                <select name="select">
                                    <option value="valor1"> </option>
                                    <option value="valor1">Manhã</option>
                                    <option value="valor2">Tarde</option>
                                    <option value="valor3">Noite</option>
                                </select>
                            </div>
                            <!--<div class="align">
                        <h3 class="palavra-chave">Horario:</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>-->
                            <div class="align">
                                <h3 class="palavra-chave">Área:</h3>
                                <select name="select">
                                    <option value="valor1"> </option>
                                    <option value="valor1">Valor 1</option>
                                    <option value="valor2">Valor 2</option>
                                    <option value="valor3">Valor 3</option>
                                </select>
                            </div>
                            <div class="align">
                                <h3 class="palavra-chave">Curso:</h3>
                                <select name="select">
                                    <option value="valor1"> </option>
                                    <option value="valor1">Valor 1</option>
                                    <option value="valor2">Valor 2</option>
                                    <option value="valor3">Valor 3</option>
                                </select>
                            </div>
                            <div class="align">
                                <h3 class="palavra-chave">Salário:</h3>
                                <select name="select">
                                    <option value="valor1"> </option>
                                    <option value="valor1">Valor 1</option>
                                    <option value="valor2">Valor 2</option>
                                    <option value="valor3">Valor 3</option>
                                </select>
                            </div>
                            <input value="APLICAR" class="button" type="submit">
                        </form>
                    </section>

                </section>

                <section class="vagas">

                    <div class="itens-vagas">
                        <section class="container-cards">
                            <div class="cards">
                                <div class="localidade">
                                    <h4>SÃO PAULO - SP</h4>
                                    <h4>TATUAPÉ</h4>
                                </div>
                                <h4>Desenvolvedor Front End Junior</h4>
                                <h4>Presencial</h4>
                                <h4>R$2.520,00</h4>
                                <button id="btn1">Clique para mais informações</button>
                            </div>

                            <div class="cards">
                                <div class="localidade">
                                    <h4>SÃO PAULO - SP</h4>
                                    <h4>TATUAPÉ</h4>
                                </div>
                                <h4>Desenvolvedor Front End Junior</h4>
                                <h4>Presencial</h4>
                                <h4>R$2.520,00</h4>
                                <button id="btn2">Clique para mais informações</button>
                            </div>

                            <div class="cards">
                                <div class="localidade">
                                    <h4>SÃO PAULO - SP</h4>
                                    <h4>TATUAPÉ</h4>
                                </div>
                                <h4>Desenvolvedor Front End Junior</h4>
                                <h4>Presencial</h4>
                                <h4>R$2.520,00</h4>
                                <button id="btn3">Clique para mais informações</button>
                            </div>
                        </section>


                    </div>
            </div>
        </div>
    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>

    <dialog id="modal">
        <div class="card-empresa">
            <section class="header-card">

                <div class="part1">
                    <img src="img/logo-nuts-sem-slogan.png" alt="">
                    <div>
                        <h2>Nuts.</h2>
                        <h3>Empresa de Tecnologia</h3>
                        <h3>Desde 2023</h3>
                    </div>
                </div>

                <div class="part2">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
            </section>

            <div class="main-modal">

                <section class="descricao-empresa">
                    <div class="conhecimentos">
                        <h4>CONHECIMENTOS</h4>
                        <ul>
                            <li>JAVA</li>
                            <li>PHP</li>
                            <li>HTML</li>
                        </ul>

                    </div>
                    <div>
                        <h3>ESTAGIO BACK-END</h3>
                        <section class="desc-vaga">
                            <p> Faça parte da nossa equipe e desenvolva habilidades
                                em programação e desenvolvimento back-end! Seja
                                responsavel por criar sistemas e soluções robustas,
                                utilizando tecnologias de ponta e colaborando com profissionais
                                experientes.
                            </p>
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <button>CANDIDATAR-SE</button>

        </div>
    </dialog>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script>
        var button1 = document.getElementById("btn1")
        var button2 = document.getElementById("btn2")
        var button3 = document.getElementById("btn3")
        var modal = document.getElementById("modal")

        button1.onclick = function () {
            modal.showModal()
        }
        button2.onclick = function () {
            modal.showModal()
        }
        button3.onclick = function () {
            modal.showModal()
        }
    </script>
</body>

</html>