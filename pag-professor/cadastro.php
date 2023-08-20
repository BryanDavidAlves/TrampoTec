<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <img class="cima" src="img/imagemfundocima.png" alt="">
        <img class="baixo" src="img/imagemfundobaixo.png" alt="">

        <section class="login">
            <div class="box-formulario">
                <h1>Cadastro Professor</h1>
                <a class="link-login" href="login.php">Ja tem uma conta? Faça seu login</a>
                <form action="login.php">
                    <div class="item-form">
                        <label for="nome-professor">NOME</label>
                        <div class="div-input">
                            <input type="text" name="nome-professor" id="nome-professor">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="email-institucional">EMAIL INSTITUCIONAL</label>
                        <div class="div-input">
                            <input type="text" name="email-institucional" id="email-institucional">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="telefone-professor">TELEFONE</label>
                        <div class="div-input">
                            <input type="text" name="telefone-professor" id="telefone-professor">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="senha-professor">SENHA</label>
                        <div class="div-input">
                            <input type="password" name="senha-professor" id="senha-professor">
                            <i class="fa-solid fa-eye" style="color: #1f3251;"></i>
                        </div>
                    </div>
                    <input class="botao" type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>