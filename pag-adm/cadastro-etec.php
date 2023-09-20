<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/cadastro-etec.css">

    <title>cadastrar etecs</title>
</head>

<body>
    <!--<img class="cima" src="img/fundo2.png" alt="">-->
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <div class="secao-cadastro">
            <a href="etec.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar uma nova ETEC</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action=" " method="post">
                <div class="input-box">
                    <label for="nome">EMAIL</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-box">
                    <label for="nome">NOME</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="input-box">
                    <label for="nome">CODIGO</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <div class="input-box">
                    <label for="nome">MUNICIPIO</label>
                    <input type="text" id="municipio" name="municipio">
                </div>
                <?php
                /*if (isset($_GET['cadastro']) && $_GET['cadastro'] == "feito") {
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
                }*/
                ?>

                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>
    <script src="modal-etec.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>