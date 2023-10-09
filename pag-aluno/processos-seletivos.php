<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">

    <link rel="stylesheet" href="../pag-aluno/css/processo-seletivo.css">
    <title>Processos Seletivos</title>
</head>

<body>
    <img class="cima-esquerda" src="img/icon1-cortado.png" alt="">
    <img class="cima-direita" src="img/icon5.png" alt="">
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
            <h1>PROCESSOS SELETIVOS <br> INSCRITO</h1>
            

                <section class="filtro">
                    <form action="">
                        <span class="icone-filtro">
                            <i class="fa-solid fa-sliders" style="color: #0a3580;"></i>
                            <h4>Filtrar por</h4>
                        </span>

                        <span class="option-filter">
                            <label for="periodo">Período:</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Qualquer</option>
                                <option value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>
                        <!--<span class="option-filter">
                            <label>Horário</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>-->
                        <span class="option-filter">
                            <label>Curso:</label>
                            <select class="option-curso" name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">Desenvolvimento de Sistemas</option>
                                <option value="">Administração</option>
                                <option value="">Nutrição</option>
                            </select>
                        </span>
                        <span class="option-filter">
                            <label>Área:</label>
                            <select name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">Area 1</option>
                                <option value="">Area 2</option>
                                <option value="">Area 3</option>
                            </select>
                        </span>
                        <span class="option-filter">
                            <label>Salário:</label>
                            <select name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">500,00 R$ - 1000,00 R$</option>
                                <option value="">1000,00 R$ - 1500,00 R$</option>
                                <option value="">1500,00 R$ - 2000,00 R$</option>
                            </select>
                        </span>
                        <input class="btn-filtro" type="submit" name="" id="">
                    </form>
                </section>

                <section class="vagas">
                    <section class="container-cards">
                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4 class="nome-vaga">Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>

                        </div>

                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4 class="nome-vaga">Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>

                        </div>

                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4 class="nome-vaga">Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>

                        </div>
                    </section>
                </section>
   
        </div>


        <?php
        include('../pag-aluno/components/sidebar.php');
        ?>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>