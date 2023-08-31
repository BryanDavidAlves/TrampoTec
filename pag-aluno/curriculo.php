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
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">
    <title>Meu Curriculo</title>
</head>

<body>
    <img class="cima-esquerda" src="img/icon5.png" alt="">
    <img class="cima-direita" src="img/icon2.png" alt="">
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <section class="infos">
            <h1>CURRICULO</h1>
            <div class="box">

                <section class="navigation">
                    <div class="trocar-pag">
                        <h2 onclick="mostrarInfoPessoal()">INFORMAÇÕES PESSOAIS</h2>
                        <h2 onclick="mostrarInfoAcademica()">INFORMAÇÕES ACADEMICAS</h2>
                        <h2 onclick=" mostrarConhecimento()">CONHECIMENTOS</h2>
                        <h2 onclick=" mostrarDisponibilidade()">DISPONIBILIDADE</h2>
                    </div>
                    <!-- <div id="line"></div>
                        linha para se mover, fazer animaçao futuramente no js
                    -->
                </section>

                <div class="container">

                    <section id="info-pessoal" class="info-pessoal">

                        <div class="one-bar">
                            <h3>NOME:</h3>
                            <h4>Bryan David Salvino Alves</h4>
                        </div>

                        <div class="one-bar">
                            <h3>EMAIL:</h3>
                            <h4>bryan.alves5@etec.sp.gov.br</h4>
                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>CEP:</h3>
                                <h4>08470-610</h4>
                            </div>

                            <div class="bar">
                                <h3>TELEFONE:</h3>
                                <h4>(11) 94002-8922</h4>
                            </div>

                        </div>
                    </section>


                    <section id="info-academica" class="info-academica">

                        <div class="one-bar">
                            <h3>CURSO:</h3>
                            <h4>Desenvolviento de Sistemas</h4>
                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>SEMESTRE:</h3>
                                <h4>3</h4>
                            </div>
                            <div class="bar">
                                <h3>DURAÇÃO:</h3>
                                <h4>Vespertino</h4>
                            </div>

                        </div>

                        <div class="two-bars">

                            <div class="bar">
                                <h3>PERIODO:</h3>
                                <h4>Tarde</h4>
                            </div>

                            <div class="bar">
                                <h3>CONCLUSÃO:</h3>
                                <h4>Dezembro</h4>
                            </div>

                        </div>
                        <div class="one-bar">
                            <h3>INSTITUIÇÃO ETEC:</h3>
                            <h4>ETEC DE GUAIANASES</h4>
                        </div>

                    </section>

                    <section class="conhecimento" id="conhecimento">
                        <section class="left">
                            <div class="input-conhecimento">
                                <h3>IDIOMA:</h3>
                                <h4>INGLES</h4>
                            </div>

                            <div class="input-conhecimento">
                                <label for="nivel-idioma">NIVEL</label>
                                <select name="nivel-idioma" id="nivel-idioma">
                                    <option value="">Basico</option>
                                    <option value="">Intermediário</option>
                                    <option value="">Avançado</option>
                                </select>
                            </div>
                            <button class="btn-conhecimento">adicionar idioma</button>
                            <div class="box-text">
                                <label for="experiencia-text">EXPERIÊNCIA:</label>
                                <textarea name="experiencia-text" id="experiencia-text" rows="10"
                                    placeholder="OPCIONAL"></textarea>
                            </div>
                        </section>

                        <section class="right">
                            <div class="box-text">
                                <label for="conhecimento-text">CONHECIMENTOS:</label>
                                <textarea name="coonhecimento-text" id="conhecimento-text"
                                    placeholder="OPCIONAL"></textarea>
                            </div>
                        </section>
                    </section>
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
                        <!--<img src="img/3.png" alt="">-->
                    </section>

                </div>

                <div class="align-salvar">
                    <!--colocar o onclick na div 'btn-salvar' por que ai facilita para o usuario apertar o botao para chamar a função-->
                    <div class="btn-salvar">
                        <i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i>
                        <input type="submit" value="SALVAR" name="" id="">
                    </div>
                </div>

        </section>


    </main>
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/troca-pag.js"></script>
</body>

</html>