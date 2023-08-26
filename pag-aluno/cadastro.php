<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/cadastro.css">
    <title>Resgistrar</title>
</head>

<body>
    <main>
        <img class="cima" src="img/imagemfundocima.png" alt="">
        <img class="baixo" src="img/imagemfundobaixo.png" alt="">


        <section class="cadastro">
            <div class="box-formulario">
                <section class="left">
                    <img class="logo" src="img/trampotec-logo.png" alt="">
                    <h2>SEJA BEM VINDO</h2>
                    <img src="img/aluno-form.png" alt="">
                </section>

                <section class="right">
                    <h2>INFORMAÇÕES DE CADASTRO</h2>

                    <form action="">
                        <div class="one-item">
                            <label for="nome-aluno">NOME COMPLETO</label>
                            <input type="text" name="nome-aluno" id="nome-aluno">

                        </div>
                        <div class="two-item">
                            <div>
                                <label for="nome-aluno">DATA DE NASCIMENTO</label>
                                <input type="text" name="nasc-aluno" id="nasc-aluno">
                            </div>
                            <div>
                                <label for="cpf-aluno">CPF</label>
                                <input type="text" name="cpf-aluno" id="cpf-aluno">
                            </div>
                        </div>

                        <div class="one-item">
                            <label for="nome-etec">INSTITUIÇÃO ETEC QUE VOCÊ ESTUDA</label>
                            <div class="box-input">
                                <input type="text" name="nome-etec" id="nome-etec">
                            </div>
                        </div>


                        <div class="two-item">
                            <div>
                                <label for="tel-aluno">TELEFONE</label>
                                <input type="text" name="tel-aluno" id="tel-aluno">
                            </div>
                            <div style ="margin-left:50px;">
                                <label for="cep-aluno">CEP</label>
                                <input type="text" name="cep-aluno" id="cep-aluno">
                            </div>
                        </div>

                        <div class="one-item">
                            <label for="senha-aluno">SENHA</label>
                            <div class="box-input">
                                <input type="password" name="senha-aluno" id="senha-aluno">
                            </div>
                        </div>
                        <div class="one-item">
                            <label for="repita-senha">REPITA A SENHA</label>
                            <div class="box-input">
                                <input type="password" name="repita-senha" id="repita-senha">
                            </div>
                        </div>
                        <input class="btn" type="submit" value="CADASTRAR">
                        
                    </form>
                </section>
            </div>
        </section>


    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#tel-aluno, #celular").mask("(00) 0000-0000");
    </script>
</body>

</html>