<?php
include('../dao/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/cadastro.css">
    <title>Registrar</title>
</head>

<body>
    <main>
        <img class="cima" src="img/imagemfundocima.png" alt="">
        <img class="baixo" src="img/imagemfundobaixo.png" alt="">


        <section class="cadastro">
            <div class="box-formulario">
                <section class="left">
                    <img class="logo" src="img/trampotec-logo.png" alt="">
                    <h2>SEJA BEM VINDO</h2>
                    <img src="img/aluno-form.png" alt="">
                </section>

                <section class="right">
                    <h2>INFORMAÇÕES DE CADASTRO</h2>

                    <form action="./beck-end/cadastro/salvarCadastro.php" method="post">
                        <div class="one-item">
                            <label for="nome-aluno">NOME COMPLETO</label>
                            <input type="text" name="nome-aluno" id="nome-aluno" required>

                        </div>
                        <div class="two-item">
                            <div>
                                <label for="nome-aluno">DATA DE NASCIMENTO</label>
                                <input type="date" name="nasc-aluno" id="nasc-aluno" required>
                            </div>
                            <div>
                                <label for="cpf-aluno">CPF</label>
                                <input  maxlength="18" type="text" name="cpf-aluno" id="cpf-aluno"
                                    placeholder="_ _ _ . _ _ _ . _ _ _ - _ _" required>
                            </div>
                        </div>

                        <div class="one-item">
                            <label for="nome-etec">INSTITUIÇÃO ETEC QUE VOCÊ ESTUDA</label>
                            <div class="box-input">
                                <input type="text" name="nome-etec" id="nome-etec" required>
                            </div>
                        </div>


                        <div class="two-item">
                            <div>
                                <label for="tel-aluno">TELEFONE</label>
                                <input  maxlength="11" type="text" name="tel-aluno" placeholder="() _ _ _ _ _ - _ _ _ _"
                                    required>
                            </div>
                            <div style="margin-left:50px;">
                                <label for="cep-aluno">CEP</label>
                                <input  maxlength="9" type="text" name="cep-aluno" id="cep-aluno" placeholder="_ _ . _ _ _ - _ _ _"
                                    required>
                            </div>
                        </div>

                        <div class="one-item">
                            <label for="senha-aluno">CRIAR SENHA</label>
                            <div class="box-input">
                                <input maxlength="8" type="password" name="senha-aluno" id="senha-aluno" required>
                            </div>
                        </div>
                        <div class="one-item">
                            <label for="repita-senha">REPITA A SENHA</label>
                            <div class="box-input">
                                <input maxlength="8" type="password" name="repita-senha" id="repita-senha" required>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "cpfInvalido") {
                            ?>
                            <div class="text-danger">
                                CPF INVALIDO!!
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "senhaFraca") {
                            ?>
                            <div class="text-danger">
                                Senha fraca, obs: até 8 digitos, exemplo: Senha12@
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "numeroInvalido") {
                            ?>
                            <div class="text-danger">
                                Telefone Invalido
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "senhasDiferentes") {
                            ?>
                            <div class="text-danger">
                                Senhas Diferentes
                            </div>
                            <?php
                        }
                        ?>
                        <input class="btn" type="submit" value="CADASTRAR">

                    </form>
                </section>
            </div>
        </section>


    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#tel-aluno, #celular").mask("(00) 0000-0000");
    </script>
</body>

</html>