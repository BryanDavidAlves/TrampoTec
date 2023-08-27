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
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">
    <title>Meu Curriculo</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <section class="infos">
            <h1>CURRICULO</h1>
            <div class="box">

                <section class="navigation">
                    <div class="trocar-pag">
                        <h2 onclick="pessoal()">INFORMAÇÕES PESSOAIS</h2>
                        <h2 onclick="academica()">INFORMAÇÕES ACADEMICAS</h2>
                        <h2 onclick="conhecimentos()" id="conhecimentos">CONHECIMENTOS</h2>
                        <h2 onclick="disponibilidadea()" id="disponibilidade">DISPONIBILIDADE</h2>
                    </div>
                    <!-- <div id="line"></div>
                        linha para se mover, fazer animaçao futuramente no js
                    -->
                </section>

                <div class="container">

                    <section id="info-pessoal" class="info-pessoal">

                        <div class="one-bar">
                            <h3>NOME:</h3>
                            <h4>Bryan Lindo da Silva</h4>
                        </div>

                        <div class="one-bar">
                            <h3>EMAIL:</h3>
                            <h4>bryanlindo@gmail.com</h4>
                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>CEP:</h3>
                                <h4>308900-410</h4>
                            </div>

                            <div class="bar">
                                <h3>TELEFONE:</h3>
                                <h4>(11) 94002-8922</h4>
                            </div>

                        </div>
                    </section>


                    <section id="info-academica" class="info-academica">

                        <div class="one-bar">
                            <h3>CURSO:</h3>
                            <h4>Desenvolviento de Sistemas</h4>
                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>SEMESTRE:</h3>
                                <h4>18 meses</h4>
                            </div>
                            <div class="bar">
                                <h3>DURAÇÃO:</h3>
                                <h4>Vespertino</h4>
                            </div>

                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>PERIODO:</h3>
                                <h4>18 meses</h4>
                            </div>

                            <div class="bar">
                                <h3>CONCLUSÃO:</h3>
                                <h4>Vespertino</h4>
                            </div>

                        </div>
                        <div class="one-bar">
                            <h3>INSTITUIÇÃO ETEC:</h3>
                            <h4>ETEC DE GUAIANASES</h4>
                        </div>

                </div>
            </div>
        </section>


    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/troca-pag.js"></script>
</body>

</html>