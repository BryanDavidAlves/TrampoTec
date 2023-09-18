<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">

    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../assets/css/style.css'>
     <link rel='stylesheet' href='../pag-empresa/css/login-cadastro.css'>

    <title>TrampoTec - Cadastro Professor</title>
</head>

<body>
    <img class="cima" src="img/imagemfundocima.png">

    <img class="baixo" src="img/imagemfundobaixo.png">
<div class="align-card-cadastro">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="./img/trampotec.png" alt="foto do aluno">
                <img width="80%" src="../assets/img/woman-charts.png">
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 mt-5">
                            <p class="titulo-um"> Bem vindo! Crie sua conta.</p>
                            <p class="titulo-dois">Já tem uma conta? <a href="">Fazer login</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form id="form-cadastro" enctype="multipart/form-data" method="post" action="./back-end/cadastro/salvarCadastro.php">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Nome Completo</small></label>
                                        <input type="text" class="form-control obrigatorio" id="nome" name="nome" placeholder="Nome Completo">
                                        <div class="invalid-feedback">
                                            O nome é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Email</small></label>
                                        <input class="form-control obrigatorio" type="text" placeholder="exemplo@dominio.com" name="email">
                                        <div class="invalid-feedback">
                                            O email é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Senha</small></label>
                                        <input class="form-control obrigatorio" type="password" placeholder="********" name="senha">
                                        <div class="invalid-feedback">
                                            A senha deve conter no mínimo 8 caracteres e conter pelo menos um número, uma letra maiúscula e um caracter especial
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Selecione uma imagem</small></label>
                                        <input class="form-control obrigatorio" type="file" id="foto" name="foto" accept="image/*"  enctype="multipart/form-data">
                                        <input type="hidden" id="foto_usuario" name="foto_usuario" >
                                        <div class="invalid-feedback">
                                            Selecione uma imagem
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit-form mt-3 col-12">CADASTRAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery-3.7.1.js"></script>
<script src="../assets/js/jquery.mask.min.js"></script>
<script src="../assets/js/my-mask.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>

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
