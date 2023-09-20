<?php include('../dao/conexao.php');

require_once "back-end/login/validador_acesso.php";

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
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/cadastro-etec.css">

    <title>cadastrar etecs</title>
</head>

<body>
    <!--<img class="cima" src="img/fundo2.png" alt="">-->
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <div class="secao-cadastro">
            <a href="etec.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar uma nova ETEC</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action="back-end/cadastro/salvarCadastroEtec.php" method="post">
                <div class="input-box">
                    <label for="nome">EMAIL</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="nome">NOME</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="input-box">
                    <label for="nome">CODIGO</label>
                    <input maxlength="text" type="numeric" id="codigo" name="codigo" required>
                </div>
                <div class="input-box">
                    <label for="nome">MUNICIPIO</label>
                    <select name="municipio">
                        <option value="Adamantina">Adamantina</option>
                        <option value="Aguaí">Aguaí</option>
                        <option value="Americana">Americana</option>
                        <option value="Amparo">Amparo</option>
                        <option value="Andradina">Andradina</option>
                        <option value="Araçatuba">Araçatuba</option>
                        <option value="Araraquara">Araraquara</option>
                        <option value="Araras">Araras</option>
                        <option value="Assis">Assis</option>
                        <option value="Atibaia">Atibaia</option>
                        <option value="Avaré">Avaré</option>
                        <option value="Barra Bonita">Barra Bonita</option>
                        <option value="Barretos">Barretos</option>
                        <option value="Bauru">Bauru</option>
                        <option value="Bebedouro">Bebedouro</option>
                        <option value="Birigui">Birigui</option>
                        <option value="Botucatu">Botucatu</option>
                        <option value="Bragança Paulista">Bragança Paulista</option>
                        <option value="Caçapava">Caçapava</option>
                        <option value="Cachoeira Paulista">Cachoeira Paulista</option>
                        <option value="Cafêlandia">Cafêlandia</option>
                        <option value="Campinas">Campinas</option>
                        <option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
                        <option value="Casa Branca">Casa Branca</option>
                        <option value="Caraguatatuba">Caraguatatuba</option>
                        <option value="Carapicuíba">Carapicuíba</option>
                        <option value="Catanduva">Catanduva</option>
                        <option value="Cerqueira César">Cerqueira César</option>
                        <option value="Cerquilho">Cerquilho</option>
                        <option value="Cotia">Cotia</option>
                        <option value="Cravinhos">Cravinhos</option>
                        <option value="Cruzeiro">Cruzeiro</option>
                        <option value="Cubatão">Cubatão</option>
                        <option value="Diadema">Diadema</option>
                        <option value="Dracena">Dracena</option>
                        <option value="Embu das Artes">Embu das Artes</option>
                        <option value="Espirito Santo do Pinhal">Espirito Santo do Pinhal</option>
                        <option value="Ferraz de Vasconcelos">Ferraz de Vasconcelos</option>
                        <option value="Franca">Franca</option>
                        <option value="Francisco Morato">Francisco Morato</option>
                        <option value="Franco da Rocha">Franco da Rocha</option>
                        <option value="Garça">Garça</option>
                        <option value="Guaíra">Guaíra</option>
                        <option value="Guaratinguetá">Guaratinguetá</option>
                        <option value="Guariba">Guariba</option>
                        <option value="Guarujá">Guarujá</option>
                        <option value="Guarulhos">Guarulhos</option>
                        <option value="Ibaté">Ibaté</option>
                        <option value="Ibitinga">Ibitinga</option>
                        <option value="Igarapava">Igarapava</option>
                        <option value="Iguapé">Iguapé</option>
                        <option value="Ilha Solteira">Ilha Solteira</option>
                        <option value="Ipiaí">Ipiaí</option>
                        <option value="Itanhaém">Itanhaém</option>
                        <option value="Itapeva">Itapeva</option>
                        <option value="Itapetininga">Itapetininga</option>
                        <option value="Itatiba">Itatiba</option>
                        <option value="Itu">Itu</option>
                        <option value="Ituverava">Ituverava</option>
                        <option value="Jacareí">Jacareí</option>
                        <option value="Jales">Jales</option>
                        <option value="Jandira">Jandira</option>
                        <option value="Jaú">Jaú</option>
                        <option value="Leme">Leme</option>
                        <option value="Lençóis Paulista">Lençóis Paulista</option>
                        <option value="Limeira">Limeira</option>
                        <option value="Lins">Lins</option>
                        <option value="Lorena">Lorena</option>
                        <option value="Mairinque">Mairinque</option>
                        <option value="Mariporã">Mariporã</option>
                        <option value="Marília">Marília</option>
                        <option value="Miguelópolis">Miguelópolis</option>
                        <option value="Mirassol">Mirassol</option>
                        <option value="Mococa">Mococa</option>
                        <option value="Mogi das Cruzes">Mogi das Cruzes</option>
                        <option value="Mogi Guaçu">Mogi Guaçu</option>
                        <option value="Mogi Mirim">Mogi Mirim</option>
                        <option value="Monte Alto">Monte Alto</option>
                        <option value="Monte Aprazível">Monte Aprazível</option>
                        <option value="Monte Mor">Monte Mor</option>
                        <option value="Nova Odessa">Nova Odessa</option>
                        <option value="Novo Horizonte">Novo Horizonte</option>
                        <option value="Olímpia">Olímpia</option>
                        <option value="Orlândia">Orlândia</option>
                        <option value="Osasco">Osasco</option>
                        <option value="Osvaldo Cruz">Osvaldo Cruz</option>
                        <option value="Palmital">Palmital</option>
                        <option value="Paraguaçu Paulista">Paraguaçu Paulista</option>
                        <option value="Penápolis">Penápolis</option>
                        <option value="Piedade">Piedade</option>
                        <option value="Pindamonhangaba">Pindamonhangaba</option>
                        <option value="Piracicaba">Piracicaba</option>
                        <option value="Piraju">Piraju</option>
                        <option value="Pirassununga">Pirassununga</option>
                        <option value="Poá">Poá</option>
                        <option value="Porto Feliz">Porto Feliz</option>
                        <option value="Porto Ferreira">Porto Ferreira</option>
                        <option value="Presidente Prudente">Presidente Prudente</option>
                        <option value="Presidente Venceslau">Presidente Venceslau</option>
                        <option value="Quatá">Quatá</option>
                        <option value="Rancharia">Rancharia</option>
                        <option value="Registro">Registro</option>
                        <option value="Ribeirão Pires">Ribeirão Pires</option>
                        <option value="Ribeirão Preto">Ribeirão Preto</option>
                        <option value="Rio Claro">Rio Claro</option>
                        <option value="Rio das Pedras">Rio das Pedras</option>
                        <option value="Rio Grande da Serra">Rio Grande da Serra</option>
                        <option value="Santa Bárbara D'Oeste">Santa Bárbara D'Oeste</option>
                        <option value="Santa Cruz das Palmeira">Santa Cruz das Palmeira</option>
                        <option value="Santa Cruz do Rio Pardo">Santa Cruz do Rio Pardo</option>
                        <option value="Santa Fé do Sul">Santa Fé do Sul</option>
                        <option value="Santa Isabel">Santa Isabel</option>
                        <option value="Santana de Parnaíba">Santana de Parnaíba</option>
                        <option value="Santo André">Santo André</option>
                        <option value="Santos">Santos</option>
                        <option value="São Bernado do Campo">São Bernado do Campo</option>
                        <option value="São Caetano do Sul">São Caetano do Sul</option>
                        <option value="São Carlos">São Carlos</option>
                        <option value="São Joaquim da Barra">São Joaquim da Barra</option>
                        <option value="São José do Rio Pardo">São José do Rio Pardo</option>
                        <option value="São José dos Campos">São José dos Campos</option>
                        <option value="São Manuel">São Manuel</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="São Pedro">São Pedro</option>
                        <option value="São Roque">São Roque</option>
                        <option value="São Sebastião">São Sebastião</option>
                        <option value="São Simão">São Simão</option>
                        <option value="Serrana">Serrana</option>
                        <option value="Sorocaba">Sorocaba</option>
                        <option value="Sumaré">Sumaré</option>
                        <option value="Suzano">Suzano</option>
                        <option value="Taboão da Serra">Taboão da Serra</option>
                        <option value="Taquaritinga">Taquaritinga</option>
                        <option value="Taquarituba">Taquarituba</option>
                        <option value="Tatuí">Tatuí</option>
                        <option value="Teodoro Sampaio">Teodoro Sampaio</option>
                        <option value="Tietê">Tietê</option>
                        <option value="Tupã">Tupã</option>
                        <option value="Vargem Grande do Sul">Vargem Grande do Sul</option>
                        <option value="Vera Cruz">Vera Cruz</option>
                        <option value="Votorantim">Votorantim</option>

                    </select>
                </div>
                <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "feito") {
                    ?>
                    <div class="text-green">
                        Cadastro Realizado
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "erro") {
                    ?>
                    <div class="text-danger">
                        Cadastro com erro
                    </div>
                <?php
                }
                ?>

                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>
    <script src="modal-etec.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>