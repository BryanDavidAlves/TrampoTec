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
                                        <input value="<?=$aluno [0]['curso']?>" type="text">
                                    </div>


                                    <div class="two-bars">

                                        <div class="bar">
                                            <h3>SEMESTRE:</h3>
                                            <input value="<?=$aluno [0]['semestre']?>" type="text">
                                        </div>
                                        <div class="bar">
                                            <h3>DURAÇÃO:</h3>
                                            <input type="text">
                                        </div>

                                    </div>

                                    <div class="two-bars">

                                        <div class="bar">
                                            <h3>PERIODO:</h3>
                                            <select name="" id="">
                                                <option value="">Matutino</option>
                                                <option value="">Vespertino</option>
                                                <option value="">Noturno</option>
                                            </select>
                                        </div>

                                        <div class="bar">
                                            <h3>CONCLUSÃO:</h3>
                                            <input type="date">
                                        </div>

                                    </div>
                                    <div class="one-bar">
                                        <h3>INSTITUIÇÃO:</h3>
                                        <select class="form-control obrigatorio" id="nome-etec" name="nome-etec"
                                                placeholder="Nome da Instituição">
                                                <option>ETEC ABDIAS DO NASCIMENTO</option>
                                                <option>ETEC ADOLPHO BEREZIN</option>
                                                <option>ETEC ALBERT EINSTEIN</option>
                                                <option>ETEC ALBERTO SANTOS DUMONT</option>
                                                <option>ETEC ALCIDES CESTARI</option>
                                                <option>ETEC AMIM JUNDI</option>
                                                <option>ETEC ÂNGELO CAVALHEIRO</option>
                                                <option>ETEC ANTONIO DE PÁDUA CARDOSO</option>
                                                <option>ETEC ANTONIO DEVISATE</option>
                                                <option>ETEC ANTONIO JUNQUEIRA DA VEIGA</option>
                                                <option>ETEC ARISTÓTELES FERREIRA</option>
                                                <option>ETEC ARNALDO PEREIRA CHEREGATTI</option>
                                                <option>ETEC ASTOR DE MATTOS CARVALHO</option>
                                                <option>ETEC AUGUSTO TORTOLERO ARAÚJO</option>
                                                <option>ETEC BARTOLOMEU BUENO DA SILVA</option>
                                                <option>ETEC BENEDITO STORANI</option>
                                                <option>ETEC BENTO CARLOS BOTELHO DO AMARAL</option>
                                                <option>ETEC BENTO QUIRINO</option>
                                                <option>ETEC CARLOS DE CAMPOS</option>
                                                <option>ETEC CAROLINA CARINHATO SAMPAIO</option>
                                                <option>ETEC CEPAM</option>
                                                <option>ETEC CÔNEGO JOSÉ BENTO</option>
                                                <option>ETEC CONSELHEIRO ANTONIO PRADO</option>
                                                <option>ETEC CORONEL FERNANDO FEBELIANO DA COSTA</option>
                                                <option>ETEC CORONEL RAPHAEL BRANDÃO</option>
                                                <option>ETEC DARCY PEREIRA DE MORAES</option>
                                                <option>ETEC DE ARAÇATUBA</option>
                                                <option>ETEC DE ARTES</option>
                                                <option>ETEC DE BARUERI</option>
                                                <option>ETEC DE CAIEIRAS</option>
                                                <option>ETEC DE CAMPO LIMPO PAULISTA</option>
                                                <option>ETEC DE CARAGUATATUBA</option>
                                                <option>ETEC DE CARAPICUÍBA</option>
                                                <option>ETEC DE CIDADE TIRADENTES</option>
                                                <option>ETEC DE COTIA</option>
                                                <option>ETEC DE CUBATÃO</option>
                                                <option>ETEC DE EMBU</option>
                                                <option>ETEC DE ESPORTES CURT WALTER OTTO BAUMGART</option>
                                                <option>ETEC DE FERNANDÓPOLIS</option>
                                                <option>ETEC DE FERRAZ DE VASCONCELOS</option>
                                                <option>ETEC DE FRANCISCO MORATO</option>
                                                <option>ETEC DE GUAIANASES</option>
                                                <option>ETEC DE GUARULHOS</option>
                                                <option>ETEC DE HORTOLÂNDIA</option>
                                                <option>ETEC DE ILHA SOLTEIRA</option>
                                                <option>ETEC DE ITANHAÉM</option>
                                                <option>ETEC DE ITAPEVI</option>
                                                <option>ETEC DE ITAQUAQUECETUBA</option>
                                                <option>ETEC DE ITAQUERA</option>
                                                <option>ETEC DE ITARARÉ</option>
                                                <option>ETEC DE LINS</option>
                                                <option>ETEC DE MAUÁ</option>
                                                <option>ETEC DE MONTE MOR</option>
                                                <option>ETEC DE NOVA ODESSA</option>
                                                <option>ETEC DE PERUÍBE</option>
                                                <option>ETEC DE PIEDADE</option>
                                                <option>ETEC DE POÁ</option>
                                                <option>ETEC DE PRAIA GRANDE</option>
                                                <option>ETEC DE SANTA FÉ DO SUL</option>
                                                <option>ETEC DE SANTA ISABEL</option>
                                                <option>ETEC DE SANTA ROSA DE VITERBO</option>
                                                <option>ETEC DE SÃO PAULO</option>
                                                <option>ETEC DE SÃO ROQUE</option>
                                                <option>ETEC DE SÃO SEBASTIÃO</option>
                                                <option>ETEC DE SAPOPEMBA</option>
                                                <option>ETEC DE SUZANO</option>
                                                <option>ETEC DE TIQUATIRA</option>
                                                <option>ETEC DE VARGEM GRANDE DO SUL</option>
                                                <option>ETEC DE VILA FORMOSA</option>
                                                <option>ETEC DEPUTADO ARY DE CAMARGO PEDROSO</option>
                                                <option>ETEC DEPUTADO FRANCISCO FRANCO</option>
                                                <option>ETEC DEPUTADO PAULO ORNELLAS CARVALHO DE BARROS 3</option>
                                                <option>ETEC DEPUTADO SALIM SEDEH</option>
                                                <option>ETEC DONA ESCOLÁSTICA ROSA</option>
                                                <option>TEC DOUTOR ADAIL NUNES DA SILVA</option>
                                                <option>TEC DOUTOR CAROLINO DA MOTTA E SILVA</option>
                                                <option>ETEC DOUTOR CELSO GIGLIO</option>
                                                <option>ETEC DOUTOR DÁRIO PACHECO PEDROSO</option>
                                                <option>ETEC DOUTOR DEMÉTRIO AZEVEDO JÚNIOR</option>
                                                <option>ETEC DOUTOR EMILIO HERNANDEZ AGUILAR</option>
                                                <option>ETEC DOUTOR FRANCISCO NOGUEIRA DE LIMA</option>
                                                <option>ETEC DOUTOR GERALDO JOSÉ RODRIGUES ALCKMIN</option>
                                                <option>ETEC DOUTOR JOSÉ COURY</option>
                                                <option>ETEC DOUTOR JOSÉ LUIZ VIANA COUTINHO</option>
                                                <option>ETEC DOUTOR JÚLIO CARDOSO</option>
                                                <option>ETEC DOUTOR LUIZ CESAR COUTO</option>
                                                <option>ETEC DOUTOR RENATO CORDEIRO</option>
                                                <option>ETEC DOUTORA MARIA AUGUSTA SARAIVA</option>
                                                <option>ETEC DOUTORA RUTH CARDOSO</option>
                                                <option>ETEC ELIAS NECHAR</option>
                                                <option>ETEC ENGENHEIRO HERVAL BELLUSCI</option>
                                                <option>ETEC EURO ALBINO DE SOUZA</option>
                                                <option>ETEC FERNANDO PRESTES</option>
                                                <option>ETEC FRANCISCO GARCIA</option>
                                                <option>ETEC FREI ARNALDO MARIA DE ITAPORANGA</option>
                                                <option>ETEC GETÚLIO VARGAS</option>
                                                <option>ETEC GILDO MARÇAL BEZERRA BRANDÃO</option>
                                                <option>ETEC GINO REZAGHI</option>
                                                <option>ETEC GUARACY SILVEIRA</option>
                                                <option>ETEC GUSTAVO TEIXEIRA</option>
                                                <option>ETEC IRMÃ AGOSTINA</option>
                                                <option>ETEC ITAQUERA II</option>
                                                <option>ETEC JACINTO FERREIRA DE SÁ</option>
                                                <option>ETEC JARAGUÁ</option>
                                                <option>ETEC JARDIM ÂNGELA</option>
                                                <option>ETEC JOÃO BAPTISTA DE LIMA FIGUEIREDO</option>
                                                <option>ETEC JOÃO BELARMINO</option>
                                                <option>ETEC JOÃO GOMES DE ARAÚJO</option>
                                                <option>ETEC JOÃO JORGE GERAISSATE</option>
                                                <option>ETEC JOÃO MARIA STEVANATTO</option>
                                                <option>ETEC JOAQUIM FERREIRA DO AMARAL</option>
                                                <option>ETEC JORGE STREET</option>
                                                <option>ETEC JOSÉ MARTIMIANO DA SILVA</option>
                                                <option>ETEC JOSÉ ROCHA MENDES</option>
                                                <option>ETEC JÚLIO DE MESQUITA</option>
                                                <option>ETEC JUSCELINO KUBITSCHEK DE OLIVEIRA</option>
                                                <option>ETEC LAURINDO ALVES DE QUEIROZ</option>
                                                <option>ETEC LAURO GOMES</option>
                                                <option>ETEC MACHADO DE ASSIS</option>
                                                <option>ETEC MANDAQUI</option>
                                                <option>ETEC MANOEL DOS REIS ARAÚJO</option>
                                                <option>ETEC MARTINHO DI CIERO</option>
                                                <option>ETEC MONSENHOR ANTÔNIO MAGLIANO</option>
                                                <option>ETEC ORLANDO QUAGLIATO</option>
                                                <option>ETEC PADRE CARLOS LEÔNCIO DA SILVA</option>
                                                <option>ETEC PADRE JOSÉ NUNES DIAS</option>
                                                <option>ETEC PARQUE BELÉM</option>
                                                <option>ETEC PARQUE DA JUVENTUDE</option>
                                                <option>ETEC PAULINO BOTELHO</option>
                                                <option>ETEC PAULISTANO</option>
                                                <option>ETEC PAULO GUERREIRO FRANCO</option>
                                                <option>ETEC PEDRO BADRAN</option>
                                                <option>ETEC PEDRO D'ARCÁDIA NETO</option>
                                                <option>ETEC PEDRO FERREIRA ALVES</option>
                                                <option>ETEC PHILADELPHO GOUVEA NETTO</option>
                                                <option>ETEC POLIVALENTE DE AMERICANA</option>
                                                <option>ETEC PREFEITO ALBERTO FERES</option>
                                                <option>ETEC PREFEITO BRAZ PASCHOALIN</option>
                                                <option>ETEC PRESIDENTE VARGAS</option>
                                                <option>ETEC PROFESSOR ADHEMAR BATISTA HEMÉRITAS</option>
                                                <option>ETEC PROFESSOR ADOLPHO ARRUDA MELLO</option>
                                                <option>ETEC PROFESSOR ALCÍDIO DE SOUZA PRADO</option>
                                                <option>ETEC PROFESSOR ALFREDO DE BARROS SANTOS</option>
                                                <option>ETEC PROFESSOR ANDRÉ BOGASIAN</option>
                                                <option>ETEC PROFESSOR APRÍGIO GONZAGA</option>
                                                <option>ETEC PROFESSOR ARMANDO BAYEUX DA SILVA</option>
                                                <option>ETEC PROFESSOR BASÍLIDES DE GODOY</option>
                                                <option>ETEC PROFESSOR CAMARGO ARANHA</option>
                                                <option>ETEC PROFESSOR CARMELINO CORREA JÚNIOR</option>
                                                <option>ETEC PROFESSOR CARMINE BIAGIO TUNDISI</option>
                                                <option>ETEC PROFESSOR DOUTOR ANTONIO EUFRÁSIO TOLEDO</option>
                                                <option>ETEC PROFESSOR DOUTOR JOSÉ DAGNONI</option>
                                                <option>ETEC PROFESSOR EUDÉCIO LUIZ VICENTE</option>
                                                <option>ETEC PROFESSOR FRANCISCO DOS SANTOS</option>
                                                <option>ETEC PROFESSOR HORÁCIO AUGUSTO DA SILVEIRA</option>
                                                <option>ETEC PROFESSOR ÍDIO ZUCCHI</option>
                                                <option>ETEC PROFESSOR JADYR SALLES</option>
                                                <option>ETEC PROFESSOR JOSÉ CARLOS SENO JUNIOR</option>
                                                <option>ETEC PROFESSOR JOSÉ IGNÁCIO AZEVEDO FILHO</option>
                                                <option>ETEC PROFESSOR JOSÉ SANT' ANA DE CASTRO</option>
                                                <option>ETEC PROFESSOR LUIZ PIRES BARBOSA</option>
                                                <option>ETEC PROFESSOR MARCOS UCHÔAS DOS SANTOS PENCHEL</option>
                                                <option>ETEC PROFESSOR MÁRIO ANTÔNIO VERZA</option>
                                                <option>ETEC PROFESSOR MASSUYUKI KAWANO</option>
                                                <option>ETEC PROFESSOR MATHEUS LEITE DE ABREU</option>
                                                <option>ETEC PROFESSOR MILTON GAZZETTI</option>
                                                <option>ETEC PROFESSOR PEDRO LEME BRISOLLA SOBRINHO</option>
                                                <option>ETEC PROFESSOR RODOLPHO JOSÉ DEL GUERRA</option>
                                                <option>ETEC PROFESSOR URIAS FERREIRA</option>
                                                <option>ETEC PROFESSORA ANNA DE OLIVEIRA FERRAZ</option>
                                                <option>ETEC PROFESSORA CARMELINA BARBOSA</option>
                                                <option>ETEC PROFESSORA DOUTORA DOROTI QUIOMI KANASHIRO TOYOHARA
                                                </option>
                                                <option>ETEC PROFESSORA ERMELINDA GIANNINI TEIXEIRA</option>
                                                <option>ETEC PROFESSORA HELCY MOREIRA MARTINS AGUIAR</option>
                                                <option>ETEC PROFESSORA ILZA NASCIMENTO PINTUS</option>
                                                <option>ETEC PROFESSORA LUZIA MARIA MACHADO</option>
                                                <option>ETEC PROFESSORA MARIA CRISTINA MEDEIROS</option>
                                                <option>ETEC PROFESSORA MARINÊS TEODORO DE FREITAS ALMEIDA</option>
                                                <option>ETEC PROFESSORA NAIR LUCCAS RIBEIRO</option>
                                                <option>ETEC RAPOSO TAVARES</option>
                                                <option>ETEC RIO GRANDE DA SERRA</option>
                                                <option>ETEC ROSA PERRONE SCAVONE</option>
                                                <option>ETEC RUBENS DE FARIA E SOUZA</option>
                                                <option>ETEC SANTA CRUZ DAS PALMEIRAS</option>
                                                <option>ETEC SANTA IFIGÊNIA</option>
                                                <option>ETEC SÃO MATEUS</option>
                                                <option>ETEC SEBASTIANA AUGUSTA DE MORAES</option>
                                                <option>ETEC SYLVIO DE MATTOS CARVALHO</option>
                                                <option>ETEC TAKASHI MORITA</option>
                                                <option>ETEC TENENTE AVIADOR GUSTAVO KLUG</option>
                                                <option>ETEC TEREZA APARECIDA CARDOSO NUNES DE OLIVEIRA</option>
                                                <option>ETEC TRAJANO CAMARGO</option>
                                                <option>ETEC UIRAPURU</option>
                                                <option>ETEC VASCO ANTONIO VENCHIARUTTI</option>
                                                <option>ETEC VEREADOR E VICE-PREFEITO SÉRGIO DA FONSECA</option>
                                                <option>ETEC ZONA LESTE</option>
                                            </select>
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
                                                <select class="form-control obrigatorio" id="nome-etec" name="nome-etec"
                                                placeholder="Idioma">
                                                <option>Inglês</option>
                                                <option>Frncês</option>
                                                <option>Espanhol</option>
                                                <option>Alemão</option>
                                                </select>
                                            </span>
                                            <span>
                                                <h3>NIVEL: </h3>
                                                <select class="form-control obrigatorio" id="nome-etec" name="nome-etec"
                                                placeholder="Idioma">
                                                <option>BÁSICO</option>
                                                <option>INTERMEDIÁRIO</option>
                                                <option>AVANÇADO</option>
                                                </select>
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