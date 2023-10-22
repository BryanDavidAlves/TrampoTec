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

                <div id="carouselExampleDark" class="carousel slide">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h5>INFORMAÇÕES ACADEMICAS</h5>

                            <div class="container">
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
                                            <h4>3 SEMESTRES</h4>
                                        </div>

                                    </div>

                                    <div class="two-bars">

                                        <div class="bar">
                                            <h3>PERIODO:</h3>
                                            <h4>MATUTINO</h4>
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
                                    <button class="btn-curso" id="abrirCurso">Adicionar curso</button>
                                </section>
                            </div>

                        </div>

                        <div class="carousel-item">
                            <h5>CONHECIMENTOS</h5>
                            <div class="container">
                                <section class="conhecimento" id="conhecimento">
                                    <section class="left">
                                        <!--usar essa div para fazer o laço paro o select no banco (input-conhecimento)-->
                                        <div class="input-conhecimento">
                                            <span>
                                                <h3>IDIOMA: </h3>
                                                <p>Ingles</p>
                                            </span>
                                            <span>
                                                <h3>NIVEL: </h3>
                                                <p>Intermediario</p>
                                            </span>
                                        </div>

                                        <button class="btn-conhecimento" id="abrirIdioma">Adicionar idioma</button>

                                        <div class="input-hab">
                                            <span class="align-hab" onclick="abrirHab()">
                                                <h3>HABILIDADE TECNOLÓGICAS </h3>
                                                <i class="fa-solid fa-caret-down" style="color: #fff;"></i>
                                            </span>
                                            <section class="drop-itens" id="habilidades">
                                                <span class="tipo-hab">
                                                    <p>Pacote Office</p><i class="fa-solid fa-xmark"></i></i>
                                                </span>
                                                <span class="tipo-hab">
                                                    <p>Pacote Office</p><i class="fa-solid fa-xmark"></i></i>
                                                </span>
                                                <span class="tipo-hab">
                                                    <p>Pacote Office</p><i class="fa-solid fa-xmark"></i></i>
                                                </span>
                                                <span class="tipo-hab">
                                                    <p>Pacote Office</p><i class="fa-solid fa-xmark"></i></i>
                                                </span>
                                                <button class="adc-hab">Adicionar habilidade</button>
                                            </section>
                                        </div>
                                    </section>

                                    <section class="right">
                                        <div class="box-text">
                                            <label for="conhecimento-text">SOBRE MIM:</label>
                                            <textarea rows="6" name="coonhecimento-text" id="conhecimento-text"
                                                placeholder="OPCIONAL"></textarea>
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <h5>DISPONIBILIDADE</h5>
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

        </section>






    </main>
    <dialog id="modalIdioma">
        <section id="container-modal" class="container-modal">
            <div class="header-modal">
                <button id="closeModalIdioma">
                    <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                </button>
            </div>
            <h3 id="titulo-modal" class="titulo-modal">ADICIONAR UM NOVO IDIOMA</h3>
            <form action="">
                <label for="">IDIOMA:</label>
                <input type="text" name="" id=""><br><br><br>
                <label for="">NIVEL:</label>
                <select name="" id="">
                    <option value="">BÁSICO</option>
                    <option value="">INTERMEDIÁRIO</option>
                    <option value="">AVANÇADO</option>
                </select><br><br><br>
                <input class="btn-modal" id="btnIdioma" type="submit" value="ADICIONAR IDIOMA">
            </form>
    </dialog>

    <dialog id="modalCurso">
        <section class="container-modal">
            <div class="header-modal">
                <button id="closeModalCurso">
                    <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                </button>
            </div>
            <h3 class="titulo-modal">ADICIONAR UM NOVO CURSO</h3>
            <form action="">
                <label for="">INSTITUIÇÃO</label>
                <select name="" id="">
                    <option value="">etec Guaianazes</option>
                    <option value="">etec Poa</option>
                    <option value="">etec Itaquera</option>
                    <option value="">etec Cidade Tiradentes</option>
                </select><br><br><br>
                <label for="">TIPO DE CURSO</label>
                <select name="" id="">
                    <option>Ensino</option>
                    <option>Curso Tecnico</option>
                    <option>Ensino Medio Integrado ao Tecnico(M-TEC)</option>
                    <option>Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)</option>
                    <option>Ensino Medio Integrado ao Tecnico em Periodo Noturno(M-TEC-N)</option>
                    <option>Articulação dos Ensino Medio - Técnico e Superior (AMS)</option>
                    <option>Especialização Técnica</option>
                </select><br><br><br>
                <label for="">NOME DO CURSO:</label>
                <select name="" id="">
                    <option value="">Desenvolviento de Sistemas</option>
                    <option value="">Nutrição</option>
                    <option value="">Administração</option>
                </select><br><br><br>
                <label for="">SEMESTRE QUE VOCÊ ESTA CURSANDO:</label>
                <input type="number" name="" id=""><br><br><br>
                <label for="">PERÍODO:</label>
                <select name="" id="">
                    <option value="">Vespertino</option>
                    <option value="">Noturno</option>
                    <option value="">Matutino</option>
                    <option value="">Integral</option>
                </select><br><br><br>
                <label for="">DURAÇÃO (MESES):</label>
                <input type="number"><br><br><br>
                <label for="">CONCLUSÃO:</label>
                <input type="date"><br><br><br>


                <input class="btn-modal" id="btn" type="submit" value="ADICIONAR CURSO">
            </form>
        </section>
    </dialog>

    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/troca-pag.js"></script>
    <script src="js/abrir-hab.js"></script>
    <script src="js/modal-curriculo.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        var closeModalCurso = document.getElementById("closeModalCurso")
        var closeModalIdioma = document.getElementById("closeModalIdioma")
        closeModalCurso.onclick = function () {
            modalCurso.close()
        }
        closeModalIdioma.onclick = function () {
            modalIdioma.close()
        }
    </script>
</body>

</html>