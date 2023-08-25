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
    <link rel="stylesheet" href="../pag-aluno/css/perfil.css">
    <title>Meu Perfil</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">
        <div class="align">
            <h1>PERFIL</h1>
            <section class="align-grid">
                <section class="perfil">
                    <div class="perfil-img">
                        <img src="img/img-perfil.jpg" alt="">
                    </div>
                    <h3>Roberta Carla Andrade</h3>
                    <h4> 19 anos</h4>
                    <h4> Estudante</h4>
                </section>
                <section class="sobre-mim">
                    <div class="left">
                        <div class="top">
                            <h2>INORMAÇAÕES PESSOAIS</h2>

                            <span style="margin-top:20px;" class="info-box">
                                <h3>NOME: </h3>
                                <p> Roberta Carla Andrade</p>
                            </span>
                            <span class="info-box">
                                <h3>EMAIL: </h3>
                                <p> robertacarlaandrade@gmail.com</p>
                            </span>
                            <span class="info-box">
                                <h3>CPF: </h3>
                                <p>155.155.155-84</p>
                            </span>
                            <span class="info-box">
                                <h3>TELEFONE: </h3>
                                <p> (11) 9 5249-9987</p>
                            </span>
                            <span class="info-box">
                                <h3>INSTITUIÇÃO: </h3>
                                <p>Etec De Guaianases</p>
                            </span>
                        </div>
                        <div class="bottom">
                            <h2 style="margin-top:10px;">INFORMAÇAÕES ACADEMICAS</h2>

                            <span style="margin-top:10px;" class="info-box">
                                <h3>CURSO: </h3>
                                <p>Desenvolvimento De Sistemas</p>
                            </span>
                            <span class="info-box">
                                <h3>DURAÇÃO: </h3>
                                <p> 8 meses</p>
                            </span>
                            <span class="info-box">
                                <h3>PERIODO: </h3>
                                <p>Vespertino</p>
                            </span>
                            <span class="info-box">
                                <h3>INSTITUIÇÃO: </h3>
                                <p> Guaianases</p>
                            </span>
                            <span class="info-box">
                                <h3>CONCLUSÃO: </h3>
                                <p>12/2023</p>
                            </span>
                            <span class="info-box">
                                <h3>MATRICULA: </h3>
                                <p>252829</p>
                            </span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="top">
                            <h2>CONHECIMENTOS</h2>

                            <span style="margin-top:20px;" class="info-box">
                                <h3>IDIOMA: </h3>
                                <p> Ingles </p>
                            </span>
                            <span class="info-box">
                                <h3>NIVEL: </h3>
                                <p>Avançado</p>
                            </span>
                            <span class="info-box">
                                <h3>CONHECIMENTOS: </h3>
                                <p>xxxxxxxxxxxxxxxxx</p>
                            </span>

                        </div>
                        <div class="bottom">
                            <h2  style="margin-top:10px;">DISPONIBILIDADE</h2>

                            <span  style="margin-top:10px;" class="info-box">
                                <h3>APARTIR: </h3>
                                <p>XXXXXXXXXXXXXXXXXX</p>
                            </span>
                            <span class="info-box">
                                <h3>ATÉ: </h3>
                                <p>XXXXXXXXXXXXXXXXXX</p>
                            </span>
                        </div>
                    </div>
                </section>

            </section>
        </div>
    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>