<?php
require_once "./beck-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/dash.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main>

      


        <section class="cards-alunos">

            <div class="card">
                <div class="card-corpo">
                    <div class="card-itens">
                        <p class="informacao"> Candidatos Totais</p>
                        <p class="numero"> 15</p>

                    </div>
                    <div class="icon-home">
                       <i class="fa-regular fa-user"></i>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-corpo">
                    <div class="card-itens">
                        <p class="informacao"> Vagas Cadastradas</p>
                        <p class="numero"> 4</p>

                    </div>
                    <div class="icon-home">
                       <i class="fa-regular fa-user"></i>
                    </div>
                </div>
            </div>

    

    

        </section>


        <section class="container-imagens">
            <img class="dash-fundo" src="./img/grafico1.png">
            <img class="dash-fundo" src="./img/grafico2.png">
        </section>



    </main>

    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script src="./js/java-empresa.js"></script>
</body>

</html>