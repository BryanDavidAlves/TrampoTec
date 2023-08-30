<?php
include('../dao/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/css/login-cadastro.css'>
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../assets/css/style.css'>
    <title>TrampoTec - Cadastro de Aluno </title>
</head>

<body>
    <img  class="cima" src="img/imagemfundocima.png">

    <img class="baixo" src="img/imagemfundobaixo.png">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="img/trampotec-logo.png" alt="foto do aluno">
                <img width="80%" src="img/aluno-form.png">
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 mt-5">
                            <p class="titulo-um"> Bem vindo! Crie sua conta</p>
                            <p class="titulo-dois">Já tem uma conta? <a href="">Fazer login</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form id="form-cadastro" enctype="multipart/form-data" method="post" action="./back-end/cadastro/salvarCadastro.php">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Nome Completo</small></label>
                                        <input type="text" class="form-control obrigatorio" id="nome" name="nome" placeholder="Nome Completo">
                                        <div class="invalid-feedback">
                                            O nome é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="cpf-aluno"><small>CPF</small></label>
                                        <input class="form-control obrigatorio cpf" type="text" placeholder="000.000.000-00" id="cpf-aluno" name="cdp-aluno">
                                        <div class="invalid-feedback">
                                            Digite um CPF válido
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nasc-aluno"><small> Data de Nascimento</small></label>
                                        <input type="date" class="form-control obrigatorio" id="nasc-aluno" name="nasc-aluno" placeholder="Data de Nascimento">
                                        <div class="invalid-feedback">
                                           Informe a data de nascimento
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome-etec"><small> Qual instituição você estuda?</small></label>
                                        <select class="form-control obrigatorio" id="nome-etec" name="nome-etec" placeholder="Nome da Instituição">
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
                                            <option>ETEC PROFESSORA DOUTORA DOROTI QUIOMI KANASHIRO TOYOHARA</option>
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
                                        <div class="invalid-feedback">
                                           Informe a data de nascimento
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="email"><small>Email</small></label>
                                        <input class="form-control obrigatorio" type="text" placeholder="exemplo@dominio.com" id="email" name="email">
                                        <div class="invalid-feedback">
                                            O email é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="telefone"><small>Telefone</small></label>
                                        <input class="form-control celular obrigatorio" type="text" placeholder="(00) 90000-0000" id="telefone" name="telefone">
                                        <div class="invalid-feedback">
                                            O telefone é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="senha"><small>Senha</small></label>
                                        <input class="form-control obrigatorio senha" type="password" placeholder="********" id="senha" name="senha">
                                        <div class="invalid-feedback">
                                            A senha deve conter no mínimo 8 caracteres e conter pelo menos um número, uma letra maiúscula e um caracter especial
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="confirm-password"><small>Confirme a senha</small></label>
                                        <input class="form-control obrigatorio confirm-password" type="password" placeholder="********" id="confirm-password" name="confirm-password">
                                        <div class="invalid-feedback">
                                            As senhas não são iguais
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="cep"><small>CEP</small></label>
                                        <input class="form-control cep obrigatorio" type="numeric" placeholder="00000-000" id="cep" name="cep">
                                        <div class="invalid-feedback">
                                            Informe um CEP válido
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="logradouro"><small>Logradouro</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="logradouro" name="logradouro">
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="numero"><small>Número</small></label>
                                        <input class="form-control obrigatorio" type="text" placeholder="Número" id="numero" name="numero">
                                        <div class="invalid-feedback">
                                            O número é obrigatório
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="bairro"><small>Bairro</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="bairro" name="bairro">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="cidade"><small>Cidade</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="cidade" name="cidade">
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="estado"><small>Estado</small></label>
                                        <input class="address-search form-control" readonly type="text" placeholder="Informe o CEP" id="estado" name="estado">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold border-0" for="nome"><small>Selecione uma imagem</small></label>
                                        <input class="form-control obrigatorio" type="file" id="foto" name="foto" accept="image/*" enctype="multipart/form-data">
                                        <input type="hidden" id="foto_usuario" name="foto_usuario" >
                                        <div class="invalid-feedback">
                                            Selecione uma imagem
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit-form mt-3 col-12">CADASTRAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../assets/js/jquery-3.7.1.js"></script>
<script src="../assets/js/jquery.mask.min.js"></script>
<script src="../assets/js/my-mask.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>

<script type="text/javascript">
    $(function(){
        $('input').keyup(function(){
            $(this).removeClass('is-valid is-invalid');
        });

        $('.cep').keyup(function(){
            $(this).removeClass('is-valid is-invalid');
            if(this.value.length == 9){
                $.get(`https://viacep.com.br/ws/${this.value}/json/`, function(address){
                    if(address.erro){
                        $('.cep').removeClass('is-valid');
                        $('.cep').addClass('is-invalid');
                    }else{  
                        $('.cep').removeClass('is-invalid');
                        $('.cep').addClass('is-valid');
                        $('#logradouro').val(address.logradouro);
                        $('#bairro').val(address.bairro);
                        $('#cidade').val(address.localidade);
                        $('#estado').val(address.uf);
                        $('#numero').focus();
                    }
                });
            }else{
                $('.address-search').val('');
            }
        });

        $('#senha').keyup(function(){
            if(!validatePassword(this.value)){
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            }else{
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
            
            if($('#confirm-password').val().length > 0) validateConfirmPassword(this.value, $('#confirm-password').val());
            
        });

        $('#confirm-password').keyup(function(){
            if(this.value.length == 0) return false;
            if($('#senha').val().length > 0) validateConfirmPassword($('#senha').val(), this.value);
        });

        $('.cpf').keyup(function(){
            if(!validateCPF(this.value)){
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            }else{
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });

        $('#form-cadastro').submit(function(e){
            if(validarForm($(this))){
                e.preventDefault();
            }
        })
    })
</script>
</body>

</html>