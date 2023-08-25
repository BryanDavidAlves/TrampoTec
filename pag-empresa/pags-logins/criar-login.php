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
    <title>TrampoTec</title>
</head>

<body>
    <img class="cima" src="../img/imagemfundocima.png">

    <img class="baixo" src="../img/imagemfundobaixo.png">

    <section class="cards-meio">

        <div class="card">

            <div class="imagens">
                <div> <img class="logo" src="../img/trampotec-logo.png" alt="foto do aluno"></div>
                <div> <img class="imagem-ilustra" src="../img/1.png" alt="foto do aluno"></div>
                <div> </div>
            </div>

            <div class="linha"> </div>
            <div class="alinhamento-botao">
                <div class="titulo-geral-login">
                    <p class="titulo-um"> Bem vindo!! Crie sua conta</p><br>
                    <p class="titulo-dois"> ja tem uma conta faça ? seu login</p><br>
                </div>
                <div class="alinha-itens">
                    <div class="card-itens">


                        <div class="itens-agendar">
                            <div>
                                <form method="post" action="../beck-end/cadastro/salvarCadastro.php">
                                    <p class="titulo-agendar"> NOME </p>
                                    <div class="barra-agendar">
                                        <input type="text" placeholder="." name="nome">
                                    </div>
                            </div>
                            <div>
                                <p class="titulo-agendar"> EMAIL </p>
                                <div class="barra-agendar">
                                    <input type="text" placeholder="" name="email">
                                </div>
                            </div>
                            <div>
                                <p class="titulo-agendar"> SENHA </p>
                                <div class="barra-agendar">
                                    <input type="password" placeholder="" name="senha">
                                </div>
                            </div>

                            <div>
                                <p class="titulo-agendar"> CNPJ </p>
                                <div class="barra-agendar">
                                    <input type="text" placeholder="" name="cnpj">
                                </div>
                            </div>

                            <div>
                                <p class="titulo-agendar"> CEP </p>
                                <div class="barra-agendar">
                                    <input type="numeric" placeholder="" name="cep">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-itens">
                        <div class="itens-agendar">

                            <div>

                                <p class="titulo-agendar"> LOGRADOURO </p>
                                <div class="barra-agendar">
                                    <input type="text" placeholder="." name="logradouro">
                                </div>
                            </div>
                            <div>
                                <p class="titulo-agendar"> NUMERO </p>
                                <div class="barra-agendar">
                                    <input type="numeric" placeholder="" name="numero">
                                </div>
                            </div>
                            <div>
                                <p class="titulo-agendar"> BAIRRO </p>
                                <div class="barra-agendar">
                                    <input type="text" placeholder="" name="bairro">
                                </div>
                            </div>

                            <div>
                                <p class="titulo-agendar"> ESTADO </p>
                                <div class="barra-agendar">
                                    <input type="text" placeholder="" name="estado">
                                </div>
                            </div>

                            <div>
                                <p class="titulo-agendar"><label for="arquivo"> SELECIONE UMA IMAGEM</label> </p>
                                <div class="barra-file">

                                    <input type="file" id="arquivo" name="foto">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <button type="submit" class="botao-agendar">CADASTRAR</button>
                    </form>
                </div>
            </div>


        </div>




    </section>

</body>

</html>