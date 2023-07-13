<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">

    <link rel="stylesheet" href="../pag-aluno/css/login-de-cadastro.css">
    <title>Processos Seletivos</title>
</head>

<body>

    <div class="box">
        <form action="..." method="post">
            <fieldset>

                <img src="img/trampotec-logo.png" alt="">
                <h1>Cadastro</h1>
                <legend><i class="fa-solid fa-user" style="color: #ffffff;"></i></legend>
                <br>
                <br><br>
                <div class="inputBox">
                    <i class="fa-solid fa-id-card" style="color: #ffffff;"></i>
                    <label class="labelInput" for="nome"> nome:</label>
                    <input type="text" id="nome" name="nome" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <i class="fa-solid fa-id-card" style="color: #ffffff;"></i>
                    <label class="labelInput" for="cpf"> CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="inputUser" required>
                </div>
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
                <div class="inputBox">
                    <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                    <label class="labelInput" for="Rsenha">Repita sua senha:</label>
                    <input type="password" id="Rsenha" name="senha" class="inputUser" required>

                </div>
                <br><br>
                <h2>Esqueceu sua senha?</h2>
                <div class="botao">
                    <button class="btn">Criar</button>
                </div>
            </fieldset>
        </form>

        <a href="login.php" class="icone"><i id="first" class="fa-solid fa-right-from-bracket"
                style="color: #ffffff;"></i> VOLTAR</a>
    </div>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>