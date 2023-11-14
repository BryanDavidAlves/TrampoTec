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
    <link rel="stylesheet" href="css/cadastro-adm.css">
    <title>TrampoTec - Cadastro Adm</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <header>
        <div class="secao-cadastro">
            <a href="adm.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left" ></i>
                <h2>Cadastrar um novo Administrador</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-adm">
            <form action="back-end/cadastro/salvarCadastro.php" method="post">

                <div class="input-box">
                    <input type="text" id="nome" name="nome" required>
                    <label class="label-anim" for="nome">NOME</label>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" required>
                    <label class="label-anim" for="nome">EMAIL</label>
                </div>
                <div class="input-box">
                    <input type="password" id="senha" name="senha" required>
                    <label class="label-anim" for="nome">SENHA</label>
                </div>
                <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "feito") {
                    ?>
                    <div class="text-green">
                        Cadastro Realizado
                    </div>
                    <?php
                }
                ?>
                <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "erro") {
                    ?>
                    <div class="text-danger">
                        Cadastro com erro
                    </div>
                    <?php
                }
                ?>

                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#telefone, #celular").mask("(00) 0000-0000");
    </script>
</body>

</html>