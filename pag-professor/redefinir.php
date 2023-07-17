<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/redefinirr.css">
</head>
<body>

    <div class=imagem-cima>
        <img src="img/imagemfundocima.png" alt="">
    </div>

    <section class="card-container-redefinir">
        <div class="card-redefinir">
            <div class="titulo-redefinir">
            <span>Redefinir</span>
            <span>Senha</span>
            </div>
            
            <form action="login.php" method="POST">
                <label for="">Nova Senha</label>
                <input type="password" name="nova_senha" id="nova-senha" placeholder="Nova Senha">
                <br> <br>
                <label for="">Repita a Senha</label>
                <input type="password" name="repete_senha" id="repete-senha" placeholder="Repita Sua Senha">
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