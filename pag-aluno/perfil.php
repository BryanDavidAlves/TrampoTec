<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/perfil.css">
    <title>Meu Perfil</title>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">
        <div class="align">
            <section class="infos">
                <h1>PERFIL</h1>
                <div class="box">
                    <div id="carouselExampleDark" class="carousel slide">


                        <form action="">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h5>INFORMAÇÕES PESSOAIS</h5>

                                    <div class="container">
                                        <section id="info-pessoal" class="info-pessoal">

                                            <div class="one-bar">

                                                <h3>NOME COMPLETO: </h3>
                                                <input id="inputNome" type="text" disabled
                                                    value="BRYAN DAVID SALVINO ALVES">
                                            </div>

                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3 class="titulo-nasc">DATA DE NASC:</h3>
                                                    <input id="inputNasc" type="text" disabled value="29/01/2004">

                                                </div>
                                                <div class="bar">
                                                    <h3>CPF:</h3>
                                                    <input id="inputCpf" type="text" disabled value="123.123.123-74">
                                                </div>
                                            </div>

                                            <div class="two-bars">
                                                <div class="bar">
                                                    <h3>CELULAR:</h3>
                                                    <input id="inputCelular" type="text" disabled
                                                        value="(11) 97526-0498">
                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>TELEFONE: </h3>
                                                    <input id="inputTelefone" type="text" disabled
                                                        value="(11) 2559-9090">
                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h5>ENDEREÇO</h5>
                                    <div class="container">
                                        <section class="endereco" id="endereco">

                                            <div class="one-bar">
                                                <span>
                                                    <h3>LOGRADOURO:</h3>
                                                    <input id="inputLogradouro" type="text" disabled
                                                        value="Rua da cachoeira azul">
                                                </span>

                                            </div>
                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3>BAIRRO:</h3>
                                                    <input id="inputBairro" type="text" disabled
                                                        value="(11) 97526-0498">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>ESTADO: </h3>
                                                    <input id="inputEstado" type="text" disabled value="(11) 2559-9090">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>
                                            <div class="three-bars">

                                                <div class="bar">
                                                    <h3>CEP:</h3>
                                                    <input id="inputCep" type="text" disabled value="08470-610">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>NUMERO: </h3>
                                                    <input id="inputNumero" type="text" disabled value="2320">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>COMPLEMENTO: </h3>
                                                    <input id="inputComplemento" type="text" disabled value="21-A">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>


                                <div class="carousel-item">
                                    <h5>CONFIGURAÇÕES DE ACESSO</h5>
                                    <div class="container">

                                        <section class="configuracoes" id="configuracoes">

                                            <div class="one-bar">

                                                <h3>Email: </h3>
                                                <h4>bryan@etec.sp.gov.br</h4>
                                            </div>


                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3 class="senha">SENHA ANTIGA:</h3>
                                                    <input type="password" name = "senhaAntiga" placeholder="Digite sua senha atual">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>REPITA: </h3>
                                                    <input type="password" value="" placeholder="Repita sua senha atual">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>
                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3 class="senha">SENHA ATUAL:</h3>
                                                    <input type="password" value="" placeholder="Digite sua nova senha ">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>REPITA: </h3>
                                                    <input type="password" placeholder="Repita sua nova senha">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <i style="color: #0a3580;font-size: 3rem;opacity: 100%;"
                                        class="fa-solid fa-chevron-left"></i>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <i style="color: #0a3580;font-size: 3rem;opacity: 100%;"
                                        class="fa-solid fa-chevron-right"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="align-salvar">
                                <!--colocar o onclick na div 'btn-salvar' por que ai facilita para o usuario apertar o botao para chamar a função-->
                                <button type="submit" class="btn-salvar">
                                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    <h3>Salvar</h3>
                                </button>
                                <span onclick="habInput()" class="btn-editar">
                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                    <h3>Editar</h3>
                                </span>
                            </div>
                    </div>
                    </form>
                </div>
        </div>
        </section>
        </div>
    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/hab-input.js"></script>
</body>

</html>