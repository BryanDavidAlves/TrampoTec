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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/fale.css">
    <title>Fale Conosco</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="container">
            <section class="titulo">
                <h1>CENTRAL FALE CONOSCO</h1>
                <h2>Tire suas úvidas de forma rápida</h2>
            </section>

            <section class="formulario">
                <form action="">
                    <div class="align">
                        <div class="box-input">
                            <label for="nome">NOME:</label>
                            <input type="text" id="nome" name="nome">
                        </div>
                        <select name="tipo" id="tipo">
                            <option value="elogio">Elogio</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                        </select>
                    </div>
                    <div class="box-input">
                        <label for="email">EMAIL:</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <textarea name="" id="" cols="30" rows="10" placeholder="detalhes"></textarea>
                    <br>
                    <input class="btn" type="submit" value="ENVIAR" name="" id="">
                </form>

            </section>
        </div>

        
        <img class="icone" src="img/icone-contato.png" alt="">
    </main>
    <?php
        include('../pag-aluno/components/sidebar.php');
        ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>