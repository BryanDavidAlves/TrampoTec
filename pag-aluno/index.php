<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Poppins:wght@600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/home.css">

    <title>Pagina de Vagas</title>
    <style>
@charset "UTF-8";
/*!
* Start Bootstrap - Modern Business v5.0.7 (https://startbootstrap.com/template-overviews/modern-business)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
*/
/*!
 * Bootstrap  v5.2.3 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
 h1{
    color: black;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 }
 p{
    font-size: 25px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 }
 a{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 }
 header{
    height: 100%;
    margin-top: 5%;
 }
.home{
    margin-left: 50%;
    height: 200%;
    width: 300px;
}
    </style>
</head>

<body >

    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">

        <header class="py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <p>Bem vindo (a) ao TrampoTec</p>
                                <br>
                                <h1 class="display-5 fw-bolder mb-2">Ingresse no mercado de trabalho com mais facilidade </h1>
                                <br>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="./curriculo.php">Currículo</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="./painel-de-vagas.php">Vagas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="home" src="img/img-home.png" alt="..." /></div>
                    </div>
                </div>
            </header>
        </div>

    </main>
    <?php
    if (isset($_GET['curriculo']) && $_GET['curriculo'] == "sim") {
        ?>
            <div >

            </div>
        <?php
    }

    ?>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/modal-vagas.js"></script>
    <script src="../assets/js/sweetalert2@11.js"></script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function () {
            modal.close()
        }
        function alert() {
            Swal.fire(
                'Parabéns!',
                'seja bem Vindo ao TrampoTec!',
                'success'
            )
        }
    </script>

    <!-- /* <script src="../assets/js/sweetalert2@11.js"></script> */ -->
</body>

</html>