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
    <link rel='stylesheet' href='../pag-empresa/css/cadastrar-vaga.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>

    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <a href="./vagas.php"><i class="fa-solid fa-chevron-left"></i> Cadastro de Vagas</a>

        <section class="formulario-cadastrar-vaga">
            <form>
                <h3>FORMULARIO DE CADASTRO DE VAGA</h3>
                <hr>
                <div class="alinhaento-inputs">
                    <span>
                        <label for="empresa">EMPRESA</label>
                        <input name="empresa" type="text">
                        <label for="salario">SALARIO</label>
                        <input name="salario" type="number">
                    </span>
                    <span>
                        <label for="vaga">VAGA</label>
                        <input name="vaga" type="text">
                        <label for="periodo">PERIODO</label>
                        <input name="periodo" type="text">
                    </span>

                </div>
                <div class="container-caixa-texto">
                    <label for="requisito">REQUISITOS</label>
                    <textarea name="requisito"></textarea>
                </div>


                <button type="submit">CADASTRAR</button>
            </form>
        </section>



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>