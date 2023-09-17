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
                <h1>Cadastro Administrativo</h1>
                <a class="link-login" href="login.php">Ja tem uma conta? Faça seu login</a>
                <form action="">
                    <div class="item-form">
                        <label for="nome">NOME</label>
                        <div class="div-input">
                            <input type="text" name="name" id="nome">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="usuario">USUÁRIO</label>
                        <div class="div-input">
                            <input type="text" name="usuario" id="usuario">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="telefone">TELEFONE</label>
                        <div class="div-input">
                            <input type="text" name="telefone" id="telefone">
                        </div>
                    </div>
                    <div class="item-form">
                        <label for="senha">SENHA</label>
                        <div class="div-input">
                            <input type="password" name="senha" id="senha">
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