<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginn.css">
</head>
<body>

<div class=imagem-cima>
        <img src="img/imagemfundocima.png" alt="">
    </div>

    <section class="card-container-login">
        <div class="card-login">
            <div class="titulo-login">
            <span>Login</span>
            <span>Professor</span>
            </div>
            
            <form action="index.php" method="POST">
                <label for="">Usuário</label>
                <input type="text" name="usuario" id="usuario" placeholder="Seu Usuário">
                <br> <br>
                <label for="">Senha</label>
                <input type="password" name="senha-login" id="senha-login" placeholder="Sua Senha">
                <br> <br>
                <input type="submit" class="botao" value="Cadastrar">

                <div class="esqueceu-senha">
                    <input type="checkbox" name="esqueceu-senha" id="esqueceu-senha">Relembrar a senha  <a href="redefinir.php">Esqueceu a Senha?</a>
                </div>
            </form>
        </div>
    </section>

    <div class=imagem-baixo>
        <img src="img/imagemfundobaixo.png" alt="">
    </div>
    
</body>
</html>