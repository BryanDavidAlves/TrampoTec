<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../css/redefinir-senha.css">
    <title>Relembrar Senha</title>
</head>

<body>
    <main>
        <img class="cima" src="../img/imagemfundocima.png" alt="">
        <img class="baixo" src="../img/imagemfundobaixo.png" alt="">

        <section class="login">
            <div class="box-formulario">
                <h1 class="title-login">Relembrar Senha</h1>

                <form action="login.php">
                    <div class="item-form">
                        <label for="novaSenha-etec">NOVA SENHA</label>
                        <div class="div-input">
                            <input type="password" name="novaSenha-etec" id="novaSenha-etec">
                        </div>
                    </div>

                    <div class="item-form">
                        <label for="confirmaSenha-etec">CONFIRMAR SENHA</label>
                        <div class="div-input">
                            <input type="password" name="confirmaSenha-etec" id="confirmaSenha-etec">
                            <i class="fa-solid fa-eye" style="color: #1f3251;"></i>
                        </div>
                    </div>
                    <input class="botao" type="submit" value="Redefinir" style="margin-bottom:30px;">
                </form>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>