<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../reset.css">
    <link rel='stylesheet' href='../../pag-empresa/css/login.css'>
    <title>TrampoTec</title>
</head>

<body>

    <img class="cima" src="../img/imagemfundocima.png">

    <img class="baixo" src="../img/imagemfundobaixo.png">



    <section class="cards-meio">

        <div class="card">

            <div class="imagens">
                <div> <img class="logo" src="../img/trampotec-logo.png" alt="foto do aluno"></div>
                <div> <img class="imagem-ilustra" src="../img/2.png" alt="foto do aluno"></div>
            </div>

            <div class="linha"> </div>

            <div class="card-itens">
                <div class="container">
                    <div class="textos-cards">
                        <p class="titulo-um"> Login</p><br>
                        <p class="titulo-dois"> Entre na sua conta</p>
                    </div>

                    <div class="itens-agendar">
                        <div>
                            <form action="../beck-end/login/valida_login.php" method="post">
                                <p class="titulo-agendar"> EMAIL </p>
                                <div class="barra-agendar">
                                    <input type="email" placeholder="." require_once name="email">
                                </div>
                        </div>

                        <div>
                            <p class="titulo-agendar"> SENHA </p>
                            <div class="barra-agendar">
                                <input type="password" placeholder="" id="password" require_once name="senha">
                                <i class="fa-solid fa-eye" id="icon" onclick="mostrarSenha()" style="color: #1f3251; cursor: pointer; font-size: 20px;"></i>
                            </div>
                        </div>


                    </div>

                    <div class="link-senha">
                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "naoaprovado") {
                        ?>
                            <div class="text-danger">
                                Cadastro Pendente
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "erro") {
                        ?>
                            <div class="text-danger">
                                Usuario ou senha Inválidos
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['login']) && $_GET['login'] == "aguardoConfirmacao") {
                        ?>
                            <div class="text-danger">
                                Acesso em Aguardo
                            </div>
                        <?php
                        }
                        ?><br>
                        <button type="submit" class="botao-agendar">
                            <h6 class="corBotao">LOGIN<h6>
                        </button>
                        <br><a class="link" href="./redefinir-senha.php"> Esqueceu sua senha? </a>
                        <br>
                        <a class="link" style="color: red; height: 10px;" href="./criar-login.php"> Não tem cadastro? Cadastre-se agora! </a>
                    </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script>
        function mostrarSenha() {
            var senha = document.getElementById('password')
            var icon = document.getElementById('icon')

            if (senha.type === 'password') {
                senha.setAttribute('type', 'text')
                icon.classList.replace('fa-eye', 'fa-eye-slash')
            } else {
                senha.setAttribute('type', 'password')
                icon.classList.replace('fa-eye-slash', 'fa-eye')
            }
        }
    </script>
</body>

</html>