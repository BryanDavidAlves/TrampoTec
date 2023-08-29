<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/componente.css">
    <link rel="stylesheet" href="./css/home.css">

    <title>TrampoTec</title>
</head>

<body>
    <?php include('../pag-etec/componentes/sidebar.php') ?>
    <?php include('../pag-etec/componentes/filtro.php') ?>
    <?php include('../pag-etec/componentes/notificacao.php') ?>

    <main class="main">

        <span class="titulo-pagina">
            <h1>Painel De cursos </h1>
        </span>
        <div class="secao-cadastro">
            <a href="cadastro-curso.php">
                <i id="icon-titulo" class="fa-solid fa-plus" style="color: #ffffff;"></i>
                <h2>Cadastrar um novo curso</h2>
            </a>
        </div>
        <section class="cards-vagas-home">

            <div class="card-home">
                <div class="card-corpo-home">
                    <div class="imagens">
                        <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                    </div>
                    <div class="card-itens-home">
                        <p class="nome-empresa"> Etec de Guianases</p>
                        <p class="nome-vaga"> Desenvolvimento de Sistemas </p>
                        <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> Rua Feliciano
                            mendonça </p>
                        <p class="mobilidade-preço">
                            <span>
                                <i class="icon-vaga fa-solid fa-bag-shopping"></i> Presencial
                            </span>
                            <span>
                                <i class="icon-vaga fa-regular fa-clock"></i> 400 Horas
                            </span>
                        </p>
                        <div class="infos">
                            <h4>Periodo</h4>
                            <p>Tarde - 13:20 as 17:40</p>

                        </div>

                    </div>
                </div>

            </div>


            <div class="card-home">
                <div class="card-corpo-home">
                    <div class="imagens">
                        <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                    </div>
                    <div class="card-itens-home">
                        <p class="nome-empresa"> Etec de Guianases</p>
                        <p class="nome-vaga"> Desenvolvimento de Sistemas </p>
                        <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> Rua Feliciano
                            mendonça </p>
                        <p class="mobilidade-preço">
                            <span>
                                <i class="icon-vaga fa-solid fa-bag-shopping"></i> Presencial
                            </span>
                            <span>
                                <i class="icon-vaga fa-regular fa-clock"></i> 400 Horas
                            </span>
                        </p>
                        <div class="infos">
                            <h4>Periodo</h4>
                            <p>Tarde - 13:20 as 17:40</p>

                        </div>

                    </div>
                </div>

            </div>

            <div class="card-home">
                <div class="card-corpo-home">
                    <div class="imagens">
                        <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                    </div>
                    <div class="card-itens-home">
                        <p class="nome-empresa"> Etec de Guianases</p>
                        <p class="nome-vaga"> Desenvolvimento de Sistemas </p>
                        <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> Rua Feliciano
                            mendonça </p>
                        <p class="mobilidade-preço">
                            <span>
                                <i class="icon-vaga fa-solid fa-bag-shopping"></i> Presencial
                            </span>
                            <span>
                                <i class="icon-vaga fa-regular fa-clock"></i> 400 Horas
                            </span>
                        </p>
                        <div class="infos">
                            <h4>Periodo</h4>
                            <p>Tarde - 13:20 as 17:40</p>

                        </div>

                    </div>
                </div>

            </div>


        </section>
    </main>



    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script src="./js/etec.js"></script>
</body>

</html>