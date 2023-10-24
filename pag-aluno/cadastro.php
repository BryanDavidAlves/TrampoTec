<?php
include('../dao/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/css/login-cadastro.css'>
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../assets/css/style.css'>
    <title>TrampoTec - Cadastro de Aluno </title>
</head>

<body>
    <img class="cima" src="img/imagemfundocima.png">

    <img class="baixo" src="img/imagemfundobaixo.png">
    <div class="align-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <img class="logo" src="img/trampotec-logo.png" alt="foto do aluno">
                    <img width="80%" src="img/aluno-form.png">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 mt-5">
                            <p class="titulo-um"> Bem vindo! Crie sua conta</p>
                            <p class="titulo-dois">Já tem uma conta? <a href="login.php">Fazer login</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form id="form-cadastro" enctype="multipart/form-data" method="post"
                                action="./back-end/cadastro/salvarCadastro.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0" for="nome"><small>Nome
                                                    Completo</small></label>
                                            <input type="text" class="form-control obrigatorio" id="nome" name="nome"
                                                placeholder="Nome Completo">
                                            <div class="invalid-feedback">
                                                O nome é obrigatório
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="cpf-aluno"><small>CPF</small></label>
                                            <input class="form-control obrigatorio cpf" type="text"
                                                placeholder="000.000.000-00" id="cpf-aluno" name="cdp-aluno">
                                            <div class="invalid-feedback">
                                                Digite um CPF válido
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0" for="nasc-aluno"><small> Data de
                                                    Nascimento</small></label>
                                            <input type="date" class="form-control obrigatorio" id="nasc-aluno"
                                                name="nasc-aluno" placeholder="Data de Nascimento">
                                            <div class="invalid-feedback">
                                                Informe a data de nascimento
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            
                                            <div class="invalid-feedback">
                                                Informe a data de nascimento
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="email"><small>Email</small></label>
                                            <input class="form-control obrigatorio" type="text" <?= isset($_GET['email']) ? 'readonly' : '' ?> value="<?= $_GET['email'] ?? '' ?>"
                                                placeholder="exemplo@dominio.com" id="email" name="email">
                                            <div class="invalid-feedback">
                                                O email é obrigatório
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="telefone"><small>Telefone</small></label>
                                            <input class="form-control celular obrigatorio" type="text"
                                                placeholder="(00) 90000-0000" id="telefone" name="telefone">
                                            <div class="invalid-feedback">
                                                O telefone é obrigatório
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="senha"><small>Senha</small></label>
                                            <input class="form-control obrigatorio senha" type="password"
                                                placeholder="********" id="senha" name="senha">
                                            <div class="invalid-feedback">
                                                A senha deve conter no mínimo 8 caracteres e conter pelo menos um
                                                número, uma letra maiúscula e um caracter especial
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="confirm-password"><small>Confirme a senha</small></label>
                                            <input class="form-control obrigatorio confirm-password" type="password"
                                                placeholder="********" id="confirm-password" name="confirm-password">
                                            <div class="invalid-feedback">
                                                As senhas não são iguais
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="cep"><small>CEP</small></label>
                                            <input class="form-control cep obrigatorio" type="numeric"
                                                placeholder="00000-000" id="cep" name="cep">
                                            <div class="invalid-feedback">
                                                Informe um CEP válido
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="logradouro"><small>Logradouro</small></label>
                                            <input class="address-search form-control" readonly type="text"
                                                placeholder="Informe o CEP" id="logradouro" name="logradouro">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="numero"><small>Número</small></label>
                                            <input class="form-control obrigatorio" type="text" placeholder="Número"
                                                id="numero" name="numero">
                                            <div class="invalid-feedback">
                                                O número é obrigatório
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="bairro"><small>Bairro</small></label>
                                            <input class="address-search form-control" readonly type="text"
                                                placeholder="Informe o CEP" id="bairro" name="bairro">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="cidade"><small>Cidade</small></label>
                                            <input class="address-search form-control" readonly type="text"
                                                placeholder="Informe o CEP" id="cidade" name="cidade">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0"
                                                for="estado"><small>Estado</small></label>
                                            <input class="address-search form-control" readonly type="text"
                                                placeholder="Informe o CEP" id="estado" name="estado">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold border-0" for="nome"><small>Selecione uma
                                                    imagem</small></label>
                                            <input class="form-control obrigatorio" type="file" id="foto" name="foto"
                                                accept="image/*" enctype="multipart/form-data">
                                            <input type="hidden" id="foto_usuario" name="foto_usuario">
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
        $(function () {
            $('input').keyup(function () {
                $(this).removeClass('is-valid is-invalid');
            });

            $('.cep').keyup(function () {
                $(this).removeClass('is-valid is-invalid');
                if (this.value.length == 9) {
                    $.get(`https://viacep.com.br/ws/${this.value}/json/`, function (address) {
                        if (address.erro) {
                            $('.cep').removeClass('is-valid');
                            $('.cep').addClass('is-invalid');
                        } else {
                            $('.cep').removeClass('is-invalid');
                            $('.cep').addClass('is-valid');
                            $('#logradouro').val(address.logradouro);
                            $('#bairro').val(address.bairro);
                            $('#cidade').val(address.localidade);
                            $('#estado').val(address.uf);
                            $('#numero').focus();
                        }
                    });
                } else {
                    $('.address-search').val('');
                }
            });

            $('#senha').keyup(function () {
                if (!validatePassword(this.value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }

                if ($('#confirm-password').val().length > 0) validateConfirmPassword(this.value, $('#confirm-password').val());

            });

            $('#confirm-password').keyup(function () {
                if (this.value.length == 0) return false;
                if ($('#senha').val().length > 0) validateConfirmPassword($('#senha').val(), this.value);
            });

            $('.cpf').keyup(function () {
                if (!validateCPF(this.value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#form-cadastro').submit(function (e) {
                if (validarForm($(this))) {
                    e.preventDefault();
                }
            })
        })
    </script>
</body>

</html>