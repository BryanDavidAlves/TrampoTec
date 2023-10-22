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

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h5>INFORMAÇÕES PESSOAIS</h5>

                                <div class="container">
                                    <section id="info-academica" class="info-academica">

                                        <div class="one-bar">
                                            <h3>NOME COMPLETO: </h3>
                                            <input type="text" disabled="disabled" value="BRYAN DAVID SALVINO ALVES">
                                        </div>


                                        <div class="two-bars">

                                            <div class="bar">
                                                <h3>DATA DE NASC:</h3>
                                                <input type="text" disabled="disabled" value="29/01/2004">
                                            </div>
                                            <div class="bar">
                                                <h3>CPF:</h3>
                                                <input type="text" disabled="disabled" value="123.123.123-74">
                                            </div>

                                        </div>

                                        <div class="two-bars">

                                            <div class="bar">
                                                <h3>CELULAR:</h3>
                                                <input type="text" disabled="disabled" value="(11) 97526-0498">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>

                                            <div class="bar">
                                                <h3>TELEFONE: </h3>
                                                <input type="text" disabled="disabled" value="(11) 2559-9090">
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
                                            <h3>LOGRADOURO: </h3>
                                            <h4>rua da cachoeira azul</h4>
                                        </div>
                                        <div class="two-bars">

                                            <div class="bar">
                                                <h3>CELULAR:</h3>
                                                <input type="text" disabled="disabled" value="(11) 97526-0498">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>

                                            <div class="bar">
                                                <h3>TELEFONE: </h3>
                                                <input type="text" disabled="disabled" value="(11) 2559-9090">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>
                                        </div>
                                        <div class="three-bars">

                                            <div class="bar">
                                                <h3>CEP:</h3>
                                                <input type="text" disabled="disabled" value="08470-610">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>

                                            <div class="bar">
                                                <h3>NUMERO: </h3>
                                                <input type="text" disabled="disabled" value="2320">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>

                                            <div class="bar">
                                                <h3>COMPLEMENTO: </h3>
                                                <input type="text" disabled="disabled" value="21-A">
                                                <!--fazer o js para possibilitar o edit-->
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <h5>CONFIGURAÇÕES DE SENHA</h5>
                                <div class="container">

                                    <section class="disponibilidade" id="disponibilidade">
                                        <section class="horarios">
                                            <div class="input-disponibilidade">
                                                <h3>DISPONIBILIDADE DE HORÁRIO A PARTIR DAS:</h3>
                                            </div>

                                            <div class="horas">
                                                <div class="input-disponibilidade">
                                                    <input class="primeiro-horario" type="time" name="" id="">
                                                </div>
                                                <h3>ATÉ</h3>
                                                <div class="input-disponibilidade">
                                                    <input class="primeiro-horario" type="time" name="" id="">
                                                </div>
                                            </div>

                                        </section>
                                    </section>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <i style="color: #0a3580;font-size: 3rem;opacity: 100%;"
                                    class="fa-solid fa-chevron-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <i style="color: #0a3580;font-size: 3rem;opacity: 100%;"
                                    class="fa-solid fa-chevron-right"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="align-salvar">
                            <!--colocar o onclick na div 'btn-salvar' por que ai facilita para o usuario apertar o botao para chamar a função-->
                            <div class="btn-salvar">
                                <i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i>
                                <input type="submit" value="SALVAR" name="" id="">
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
</body>

</html>