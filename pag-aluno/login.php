<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <main>
        <img class="cima" src="img/imagemfundocima.png" alt="">
        <img class="baixo" src="img/imagemfundobaixo.png" alt="">

        <section class="login">
            <div class="box-formulario">
                <h1 class="title-login">Login <br>Aluno</h1>

                <form action="index.php">
                    <div class="item-form">
                        <label for="nome-aluno">EMAIL INSTITUCIONAL</label>
                        <div class="div-input">
                            <input type="text" name="nome-aluno" id="nome-aluno">
                        </div>
                    </div>

                    <div class="item-form">
                        <label for="senha-aluno">SENHA</label>
                        <div class="div-input">
                            <input type="password" name="senha-aluno" id="senha-aluno">
                            <i class="fa-solid fa-eye" style="color: #1f3251;"></i>
                        </div>
                    </div>
                    <input class="botao" type="submit" value="Entrar">
                    <div class="remember">
                        <div>
                            <input id="check" type="checkbox">
                            <label for="check"> Lembre de mim</label>
                        </div>
                        <a href="relembrar-senha.php">Esqueceu a Senha?</a>
                    </div>
                    <a href="cadastro.php" style="margin-left:18%;color:red;">NAO TENHO CADASTRO</a>
                </form>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>