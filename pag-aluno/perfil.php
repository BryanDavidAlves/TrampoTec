<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>

    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/perfil.css">
    <title>Meu Perfil</title>

    <style>

.section {
    padding: 100px 0;
    position: relative;
}

img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

    </style>
</head>   

<body>
  
    <?php
    include('../pag-aluno/components/header.php');
    ?>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <section class="section about-section gray-bg" id="about">
            <div class="container">
            <div class="counter">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Giullia</h3>
                            <h6 class="theme-color lead">Estudante do Centro Paula Souza</h6>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>Canada</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
        </section>

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

    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/hab-input.js"></script>

</body>

</html>