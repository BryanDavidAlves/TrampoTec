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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">

    <title>Meu Curriculo</title>

    <style>

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    border-radius: 10px
}

#register{

  color: #f9210e;
  font-size: 22px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-weight: bold;
}

h1 {
    text-align: center
}

.input {
    margin-top: 2%;
    height: 50px;
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    border: 2px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none;
}



.tab input:focus{

  border:1px solid #6a1b9a !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
  font-weight: bold;
    display: none;
    top: 3%;
    color: #0a04bf;
    font-size: 20px;
}

button {
    border: none;
    cursor: pointer;
}
.botoes{
  display:flex;
  width: auto;
  align-items: center;
  justify-content: space-between;
}
.voltar{
  height: 50px;
  width: 50px;
  background-color: transparent;

}
.avancar{
  height: 50px;
  width: 50px;
  background-color: transparent;
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
    gap: 20px;
    position: relative;
    height: 100px;
    width: 300px;
    text-align: center;
    background-color: transparent;
    border: none;
    border-radius: 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 20px;
    color: #0a04bf;
    opacity: 0.5;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #6a1b9a;
   opacity: 1;

}


.all-steps {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 60px;
}



</style>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>

   <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
                <h1 id="register">Preencha seu currículo</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step">Informações acadêmicas</i></span> 
                  <span class="step">Conhecimentos</i></span>
                  <span class="step">Conhecimentos adicionais</i></span>
                  <span class="step">Disponibilidade</i></span>
                </div>

                <div class="tab">
                  <h6>Etec:</h6>
                    <p>
                      <select class="input" placeholder="etec" name="fname"
                      placeholder="Nome da Instituição">
                                                <option>Selecione uma instituição etec</option>
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
                                            </select></p>
                      <br>
                      <h6>Curso:</h6>
                    <p>
                      <select class="input" placeholder="curso" name="fname">
                            <option value="">Selecione seu curso</option>
                            <option value="">Desenvolviento de Sistemas</option>
                            <option value="">Nutrição</option>
                            <option value="">Administração</option>
                      </select>
                      </p>
                      <br>
                      <h6>Período:</h6>
                    <p>
                      <select class="input" placeholder="periodo" name="fname">
                              <option value="">Selecione um período</option>
                              <option value="">Vespertino</option>
                              <option value="">Noturno</option>
                              <option value="">Matutino</option>
                              <option value="">Integral</option>
                      </select>
                    </p>
                      <br>
                      <h6>Carga Horária:</h6>
                    <p>
                      <input class="input" placeholder="Digite sua carga Horária" name="fname" type="number"></p>
                      <br>
                      <h6>Semestre:</h6>
                    <p>
                      <select class="input" placeholder="semestre"  name="fname">
                      <option value="">Selecione um semestre</option>
                              <option value="">1º semestre</option>
                              <option value="">2º semstre</option>
                              <option value="">3º semestre</option>
                              <option value="">4º semestre</option>
                              <option value="">5º semestre</option>
                              <option value="">6º semestre</option>

                      </select>
                      </p>
                      <br>
                      <h6>Conclusão:</h6>
                    <p>
                      <input class="input" placeholder="conclusao"  name="fname" type="date"></p>
                </div>


                <div class="tab">
                  <h6>Idioma:</h6>
                    <p><select class="input" placeholder="idioma"  name="dd"
                    placeholder="Idioma">
                                                <option>Selecione um idioma</option>
                                                <option>Inglês</option>
                                                <option>Francês</option>
                                                <option>Espanhol</option>
                                                <option>Alemão</option>
                                                </select>
                  </p>
                    <br>
                    <h6>Nível:</h6>
                    <p><select class="input" placeholder="nivel"  name="dd">
                          <option value="">Selecione um nível</option>
                          <option value="">BÁSICO</option>
                          <option value="">INTERMEDIÁRIO</option>
                          <option value="">AVANÇADO</option>
                      </select>
                    </p>
                    <br>

                    <h6>Habilidades Tecnológicas:</h6>
                    <p><input class="input" placeholder="Digite suas habilidades tecnológicas"  name="dd" type="text"></p>
                </div>
                <div class="tab">
                    <h6>Conhecimentos adicionais:</h6>
                    <p><input class="input" placeholder="Digite seus conhecimentos adicionais"  name="email" type="text"></p>
                 
                </div>
                <div class="tab">
                    <h6>Horário de disponilidade a partir das:</h6>
                    <p><input class="input" placeholder="horario"  name="uname" type="time"></p>
                </div>

                <div class="botoes">
                <div class="botaovoltar">
                    <div style="float:right;">
                      <button type="button" onclick="nextPrev(-1)">
                        <img src="./img/icone voltar .png" class="voltar">
                      </i></button> 
                  </div>
                </div>

                <div class="botaoavancar">
                      <button type="button" onclick="nextPrev(1)">
                      <img src="./img/icone avancar.png" class="avancar">
                      </i></button> 
                </div>

                

                </div>
            </form>
        </div>
    </div>
</div>
    
</body>

</html>
<script>
  var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>