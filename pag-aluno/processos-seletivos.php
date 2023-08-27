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
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
            <h1>PROCESSOS SELETIVOS <br> INSCRITO</h1>
            <div class="control-line">

                <section class="filtro">
                    <div class="filtro-header">
                        <span id="icon-filtro" class="material-symbols-outlined">
                            tune
                        </span>
                        <h3 class="titulo-filtro">Filtrar por </h3>
                    </div>
                    <form action="">
                        <div class="align">
                            <h3 class="palavra-chave">Periodo:</h3>
                            <select name="select">
                                <option value="valor1"> </option>
                                <option value="valor1">Manhã</option>
                                <option value="valor2">Tarde</option>
                                <option value="valor3">Noite</option>
                            </select>
                        </div>
                        <!--<div class="align">
                        <h3 class="palavra-chave">Horario:</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>-->
                        <div class="align">
                            <h3 class="palavra-chave">Área:</h3>
                            <select name="select">
                                <option value="valor1"> </option>
                                <option value="valor1">Valor 1</option>
                                <option value="valor2">Valor 2</option>
                                <option value="valor3">Valor 3</option>
                            </select>
                        </div>
                        <div class="align">
                            <h3 class="palavra-chave">Curso:</h3>
                            <select name="select">
                                <option value="valor1"> </option>
                                <option value="valor1">Valor 1</option>
                                <option value="valor2">Valor 2</option>
                                <option value="valor3">Valor 3</option>
                            </select>
                        </div>
                        <div class="align">
                            <h3 class="palavra-chave">Salário:</h3>
                            <select name="select">
                                <option value="valor1"> </option>
                                <option value="valor1">Valor 1</option>
                                <option value="valor2">Valor 2</option>
                                <option value="valor3">Valor 3</option>
                            </select>
                        </div>
                        <input value="APLICAR" class="button" type="submit">
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
                        </section>
                </section>
            </div>
        </div>


        <?php
        include('../pag-aluno/components/sidebar.php');
        ?>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>