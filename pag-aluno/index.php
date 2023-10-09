<?php
require_once "./back-end/login/validador_acesso.php";
?>
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
    <link rel="stylesheet" href="../pag-aluno/css/home.css">

    <title>Pagina de Vagas</title>
</head>

<body>
    <img class="cima-esquerda" src="img/icon4.png" alt="">
    <img class="cima-direita" src="img/icon2.png" alt="">
    <!--
    <img class="baixo-direita" src="img/icon1.png" alt="">
    <img class="baixo-esquerda" src="img/icon5.png" alt="">
    -->
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
            <h1> </h1>

            <section class="inicio">
                <div class="left">
                    <h2>VAGAS DE ESTÁGIO, <br>
                        INGRESSE NO MERCADO <br>
                        DE TRABALHO!
                    </h2>
                    <span>
                        <a href="curriculo.php">CURRÍCULO</a>
                        <a href="painel-de-vagas.php">VAGAS</a>
                    </span>
                </div>
                <div class="right">
                    <img src="img/img-home.png" alt="">
                </div>
            </section>

        </div>

    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/modal-vagas.js"></script>

</body>

</html>