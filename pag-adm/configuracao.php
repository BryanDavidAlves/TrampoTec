<?php
require_once "back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/configuracao.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Configurações</h1>
    </header>
    <main>
        <section class="configuracoes">
            <div class="configuracao">
                <div class="part1">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <h2> Alterar nome</h2>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div class="configuracao">
                <div class="part1">
                    <i class="fa-solid fa-user"></i>
                    <h2> Alterar e-mail</h2>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>



        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>