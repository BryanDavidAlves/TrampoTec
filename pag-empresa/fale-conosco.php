<?php
require_once "./beck-end/login/validador_acesso.php";
$id = $_SESSION['idEmpresa'];
?>
<?php
include '../dao/conexao.php';

$querySelect = "SELECT tb_empresa.nome, tb_empresa.email FROM tb_empresa
    WHERE tb_empresa.idEmpresa = $id";

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

    <link rel="stylesheet" href="../pag-empresa/css/fale.css">
    <title>TrampoTec</title>
</head>

<body>


    <?php include '../pag-empresa/componentes/sidebar.php' ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <span class="container-icon">
            <a class="link-add" href="./configuracoes.php"> <i
                    class="icon-add fa-solid fa-circle-chevron-left"></i><span> Fale-Conosco </span></a>
        </span>


        <div class="container">
            <section class="titulo">
            </section>

            <section class="formulario">
                <form action="beck-end/faleConosco/salvar.php" method="post">
                    <div class="align">

                        <div class="input-box">
                            <?php

                            foreach ($faleConosco as $faleConosco) {
                                ?>

                                <input type="text" id="nome" name="nome" value="<?=$faleConosco[0]?>" required>
                                <label class="label-anim" for="nome">NOME: *</label>
                            </div>
                            <select name="categoria" id="categoria">
                                <option value="elogio">Elogio</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="reclamacao">Reclamação</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="email" id="email" name="email" value="<?=$faleConosco[1]?>" required>
                            <label class="label-anim" for="email">EMAIL: *</label>
                            <?php
                            }
                            ?>
                            <input type="hidden" name="tipoUsuario" value="Empresa">
                    </div>
                    <div class="input-box">
                        <textarea name="comentario" id="comentario" cols="30" rows="10" required
                            placeholder="Digite aqui o motivo do seu contato"></textarea>
                        <label class="label-no-anim" for="email">MENSAGEM: * </label>
                    </div>

                    <input class="btn" type="submit" value="ENVIAR" name="" id="">
                </form>

            </section>
        </div>

    </main>

    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>