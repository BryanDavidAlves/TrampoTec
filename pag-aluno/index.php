<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/component-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-vaga.css">
    <title>Pagina de Vagas</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div>
            <h1>PAINEL DE VAGAS</h1>
            <section class="vagas">

                <img src="img/img-perfil.jpg" alt="">

                <section class="container-cards">
                    <div class="cards">
                        <div class="localidade">
                            <h4>SÃO PAULO - SP</h4>
                            <h4>TATUAPÉ</h4>
                        </div>
                        <h4>Desenvolvedor Front End Junior</h4>
                        <h4>Presencial</h4>
                        <h4>R$2.520,00</h4>
                        <button id="btn">Clique para mais informações</button>
                    </div>
                </section>

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
                            <h3 class="palavra-chave">Curso</h3>
                            <select name="select">
                                <option value="valor1"> </option>
                                <option value="valor1">Valor 1</option>
                                <option value="valor2">Valor 2</option>
                                <option value="valor3">Valor 3</option>
                            </select>
                        </div>
                        <div class="align">
                            <h3 class="palavra-chave">Palavra <br> chave</h3>
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
        </div>
        <?php
        include('../pag-aluno/components/sidebar.php');
        ?>
    </main>


    <dialog id="modal">
        <div class="card-empresa">
            <section class="header-card">

                <div class="part1">
                    <img src="img/logo-nuts-sem-slogan.png" alt="">
                    <div >
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
        var button = document.getElementById("btn")
        var modal = document.getElementById("modal")

        button.onclick = function () {
            modal.showModal()
        }
    </script>
</body>

</html>