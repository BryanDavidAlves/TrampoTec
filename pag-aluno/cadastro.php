<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/registrar.css">
    <title>Resgistrar</title>
</head>

<body>
    <main>
        <img class="cima" src="../img/imagemfundocima.png" alt="">
        <img class="baixo" src="../img/imagemfundobaixo.png" alt="">

        <section class="login">
            <div class="box-formulario">
                <h1 class="title-login">Cadastro <br> Aluno</h1>

                <form action="index.php">
                    <div class="item-form">
                        <label for="nome-professor">EMAIL INSTITUCIONAL</label>
                        <div class="div-input">
                            <input type="text" name="nome-professor" id="nome-professor">
                        </div>
                    </div>

                    <div class="item-form">
                        <label for="senha-professor">CODIGO DE LOGIN</label>
                        <div class="div-input">
                            <input type="text" name="senha-professor" id="senha-professor">
                            <!--<i class="fa-solid fa-eye" style="color: #1f3251;"></i>-->
                        </div>
                    </div>
                    <input style="margin-bottom:8%;" class="botao" type="submit" value="ACESSAR">


                </form>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>