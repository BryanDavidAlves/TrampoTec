<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">

    <link rel="stylesheet" href="../pag-aluno/css/login-e-cadastro.css">
    <title>Processos Seletivos</title>
</head>

<body>

    <div class="box">
        <form action="..." method="post">
            <fieldset>

                <img src="img/trampotec-logo.png" alt="">
                <h1>Login</h1>
                <legend><i class="fa-solid fa-user" style="color: #ffffff;"></i></legend>
                <br>

                <br><br>
                <div class="inputBox">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    <label class="labelInput" for="email"> email:</label>
                    <input type="text" id="email" name="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                    <label class="labelInput" for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" class="inputUser" required>

                </div>
                <br><br>
                <h2>Esqueceu sua senha?</h2>
                <div class="botao">
                    <button class="btn"><a href="index.php" >Entrar</a></button> <!--Tirar o link automatico quando fizer o back-end-->
                </div>
            </fieldset>
        </form>
        <p>Ainda nao tem cadastro?</p>
        <a href="cadastro.php"><button class="btn-cadastro">CADASTRAR</button></a>
    </div>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>