<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <main>

        <img class="cima" src="img/imagemfundocima.png">

<img class="baixo" src="img/imagemfundobaixo.png">
<div class="align-card-cadastro">
<div class="container">
        <div class="content first-content">
                <div class="first-column">
                    <h2 class="title title-primary">Bem Vindo de Volta!</h2>

                    <p class="description description-primary">Efetue seu login clicando no botão </p>
                    <button id="signin" class="btn btn-primary">sign in</button>
                </div>

                <div class="second-column">
                    <p class="title-conta">Faça Seu Login </p>

                    <form id="form-cadastro" enctype="multipart/form-data" method="post" action="./back-end/login/valida_login.php">

                        <div class="form-group">
                            <div class="align-input">

                            <i class="fa-solid fa-user fa-lg" style="color:#75777a;"></i><input type="text" class="form-control obrigatorio" id="nome-aluno" name="nome-aluno" placeholder="Seu Email">

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="align-input">
                                <i class="fa-solid fa-envelope fa-lg" style="color: #75777a;"></i><input class="form-control obrigatorio" type="text" placeholder="Sua Senha" name="senha-aluno">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="align-btn">

                            <button type="submit" class="btn btn-submit-form mt-3 col-12" id="btn">LOGAR</button>

                            </div>

                        </div>
                    </form>
                </div>
        </div>
        <div class="content second-content">
            <div class="first-column">
            <h2 class="title title-primary">Olá, Amigo!</h2>
            <p class="description description-primary">Crie sua conta agora</p>
            <p class="description description-primary">e comece sua jornada </p>
            <button id="signup" class="btn btn-primary">sign up</button>
            </div>

            <div class="second-column">
            <h2 class="title title-second">Faça seu login</h2>



            <form action="back-end/login/valida_login.php" method="post">
                <div class="form-group-login">
                    <div class="align-input-login">
                        <i class="fa-solid fa-envelope fa-lg" style="color: #75777a;"></i><input  class="form-control-login obrigatorio"  placeholder= "Seu Email" type="email" name="email-professor" id="email-professor">
                    </div>

                    <div class="align-input-login">
                        <i class="fa-solid fa-lock fa-lg" style="color: #75777a;"></i><input  class="form-control-login obrigatorio"  placeholder="Sua Senha" type="password" name="senha-professor" id="password">
                        <i class="fa-solid fa-eye" id="icon" onclick="mostrarSenha()" style="color: #1f3251;"></i>
                    </div>

                                    <?php
if (isset($_GET['login']) && $_GET['login'] == "erro") {
    ?>
                                            <div class="text-danger">
                                                Usuario ou senha Inválidos
                                            </div>
                                        <?php
}
?>
                        <div class="align-btn">
                            <input class="btn-second"  type="submit" value="Entrar">
                        </div>

                        <div class="align-row-conta">
                        <a href="relembrar-senha.php">Esqueceu a Senha?</a>

                </div>
            </form>
            </div>
        </div>
</div>
</div>
<script src="../assets/js/jquery-3.7.1.js"></script>
<script src="../assets/js/jquery.mask.min.js"></script>
<script src="../assets/js/my-mask.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="js/professor.js"></script>
<script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function(){
        $('input').keyup(function(){
            $(this).removeClass('is-valid is-invalid');
        });

        $('.cep').keyup(function(){
            $(this).removeClass('is-valid is-invalid');
            if(this.value.length == 9){
                $.get(`https://viacep.com.br/ws/${this.value}/json/`, function(address){
                    if(address.erro){
                        $('.cep').removeClass('is-valid');
                        $('.cep').addClass('is-invalid');
                    }else{
                        $('.cep').removeClass('is-invalid');
                        $('.cep').addClass('is-valid');
                        $('#logradouro').val(address.logradouro);
                        $('#bairro').val(address.bairro);
                        $('#cidade').val(address.localidade);
                        $('#estado').val(address.uf);
                    }
                });
            }else{
                $('.address-search').val('');
            }
        });

        $('.cnpj').keyup(function(){
            if(!validateCNPJ(this.value)){
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            }else{
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });

        $('#form-cadastro').submit(function(e){
            if(validarForm($(this))){
                e.preventDefault();
            }
        })
    })
</script>
</body>

</html>