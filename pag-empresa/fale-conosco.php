<?php
require_once "./beck-end/login/validador_acesso.php";
?>
<?php
include '../dao/conexao.php';

$querySelect = "SELECT * FROM tb_fale_conosco";

$resultado = $conexao->query($querySelect);

$faleConosco = $resultado->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/conosco.css'>
    <link rel="stylesheet" href="../pag-empresa/css/fale.css">
    <title>TrampoTec</title>
</head>

<body>


    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <span class="container-icon">
            <a class="link-add" href="./configuracoes.php"> <i class="icon-add fa-solid fa-circle-chevron-left"></i></a> <span> Fale-Conosco </span>
        </span>


        <div class="container">
            <section class="titulo">
                <h2>Tire suas úvidas de forma rápida</h2>
            </section>

            <section class="formulario">
                <form action="beck-end/faleConosco/salvar.php" method="post">
                    <div class="align">
                        <div class="box-input">
                            <label for="nome">NOME:</label>
                            <input type="text" id="nome" name="nome">
                        </div>
                        <select name="categoria" id="categoria">
                            <option value="elogio">Elogio</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                        </select>
                    </div>
                    <div class="box-input">
                        <label for="email">EMAIL:</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="detalhes"></textarea>
                    <br>
                    <input class="btn" type="submit" value="ENVIAR" name="" id="">
                </form>

            </section>
        </div>

    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>