<?php
include('../../dao/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../reset.css">
    <link rel='stylesheet' href='../../pag-empresa/css/login-cadastro.css'>
    <link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../../assets/css/style.css'>
    <title>TrampoTec</title>
</head>

<body>
    <img class="cima" src="../img/imagemfundocima.png">

    <img class="baixo" src="../img/imagemfundobaixo.png">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="../img/trampotec-logo.png" alt="foto do aluno">
                <img width="80%" src="../../assets/img/woman-charts.png">
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 mt-5">
                            <p class="titulo-um"> Bem vindo! Crie sua conta</p>
                            <p class="titulo-dois">Já tem uma conta? <a href="">Fazer login</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form id="form-cadastro" enctype="multipart/form-data" method="post" action="../beck-end/cadastro/salvarCadastro.php">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>CNPJ</small></label>
                                        <input class="form-control cnpj obrigatorio" type="text" placeholder="00.000.000/0001-00" name="cnpj">
                                        <div class="invalid-feedback">
                                            Digite um CNPJ válido
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Razão Social</small></label>
                                        <input type="text" class="form-control obrigatorio" id="nome" name="nome" placeholder="Razão Social">
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
                                        <label class="font-weight-bold border-0" for="nome"><small>Telefone</small></label>
                                        <input class="form-control celular obrigatorio" type="text" placeholder="(00) 90000-0000" name="telefone">
                                        <div class="invalid-feedback">
                                            O telefone é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>CEP</small></label>
                                        <input class="form-control cep obrigatorio" type="numeric" placeholder="00000-000" name="cep">
                                        <div class="invalid-feedback">
                                            Informe um CEP válido
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Logradouro</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="logradouro" name="logradouro">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Bairro</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="bairro" name="bairro">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Cidade</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="cidade" name="cidade">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Estado</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="estado" name="estado">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Número</small></label>
                                        <input class="form-control obrigatorio" readonly type="text" placeholder="Número" id="numero" name="numero">
                                        <div class="invalid-feedback">
                                            O número é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Selecione uma imagem</small></label>
                                        <input class="form-control obrigatorio" type="file" id="foto" name="foto" accept="image/*">
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
<script src="../../assets/js/jquery-3.7.1.js"></script>
<script src="../../assets/js/jquery.mask.min.js"></script>
<script src="../../assets/js/my-mask.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/main.js"></script>

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