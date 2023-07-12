<!DOCTYPE html>
<html lang="en">

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

        <div>
            <h1>PERFIL</h1>
            <section class="perfil">

                <section class="about1">
                    <img src="img/img-perfil.jpg" alt="">
                    <h2 class="nome">Paula</h2>

                </section>
                <span class="linha1"> </span>
                <section class="about2">
                    <h2>FORMAÇÕES ACADEMICAS</h2>
                    <div class="align">
                        <div class="one-bar">
                            <h3>CURSO: </h3>
                            <h4>Desenvolviento de Sistemas</h4>
                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>Druração:</h3>
                                <h4>18 meses </h4>
                            </div>
                            <div class="bar">
                                <h3>PERÍODO:</h3>
                                <h4>Vespertino</h4>
                            </div>

                        </div>

                        <div class="one-bar">
                            <h3>INSTITUIÇÃO: </h3>
                            <h4>Etec de Guaianases</h4>
                        </div>

                        <div class="one-bar">
                            <h3>CURSO: </h3>
                            <h4>Desenvolviento de Sistemas</h4>
                        </div>

                        <div class="one-bar">
                            <h3>CONCLUSÃO: </h3>
                            <h4>12/2023</h4>
                        </div>
                        <div class="one-bar">
                            <h3>MATRICULA: </h3>
                            <h4>132542</h4>
                        </div>
                        <br>
                        <section class="experiencia">
                            <h2>EXPERIÊNCIAS</h2>
                            <div class="align">
                                <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                </p>
                                <h2 class="alterar">ALTERAR</h2>
                            </div>
                        </section>
                    </div>

                </section>
                <span class="linha2"> </span>
                <section class="about3">
                    <h2>Habilidades</h2>
                    <div class="align">
                        <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                        </p>
                        <h2 class="alterar">ALTERAR</h2>
                    </div>
                    <br>
                    <section class = "sobre-mim">
                            <h2>SOBRE MIM</h2>
                            <div class="align">
                                <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>
                                </p>
                                <h2 class="alterar">ALTERAR</h2>
                            </div>
                        </section>
                </section>
            </section>
        </div>
        <?php
        include('../pag-aluno/components/sidebar.php');
        ?>
    </main>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>