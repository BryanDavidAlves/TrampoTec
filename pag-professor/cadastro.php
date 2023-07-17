<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class=imagem-cima>
        <img src="img/imagemfundocima.png" alt="">
    </div>

    <section class="card-container">
        <div class="card">
            <span>Cadastro</span>
            <span>Professor</span>
            <h5>Já tem uma conta? <a href="login.php">Faça seu login</a></h5>
            <form action=" login.php" method="POST">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Seu Nome">
                <br> <br>
                <label for="">Email Institucional</label>
                <input type="text" name="email" id="email" placeholder="Seu Email Institucional">
                <br> <br>
                <label for="">Telefone</label>
                <input type="number" name="telefone" id="telefone" placeholder="Seu Telefone">
                <br> <br>
                <label for="">Senha</label>
                <input type="password" name="senha-cadastro" id="senha-cadastro" placeholder="Sua Senha">
                <br> <br>
                <input type="submit" class="botao" value="Cadastrar">
            </form>
        </div>
    </section>

    <div class=imagem-baixo>
        <img src="img/imagemfundobaixo.png" alt="">
    </div>
    
</body>
</html>