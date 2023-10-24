<?php
include '../dao/conexao.php';

require_once "./beck-end/login/validador_acesso.php";

// Pega o ID do cliente logado
$cliente_id = $_SESSION['idEmpresa'];

$querySelect = "SELECT tb_empresa.* , tb_perfil_empresa.* , tb_telefone_empresa.*
FROM tb_empresa
INNER JOIN tb_perfil_empresa ON tb_perfil_empresa.fk_idEmpresa = tb_empresa.idEmpresa
INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    WHERE tb_empresa.idEmpresa = '$cliente_id'
";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/perfil.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include '../pag-empresa/componentes/sidebar.php'?>
    <?php include '../pag-empresa/componentes/email.php'?>
    <?php include '../pag-empresa/componentes/notificacao.php'?>

    <dialog id="requisito" class="dialog-requisitos">
        <form class="form-requisitos" action="./beck-end/alterar/update.php" method="post" >
            <div class="inputs-dialog">
                <span class="nav-dialog">
                    <i onclick="modalrequisito()" class="fa-solid fa-circle-xmark"></i>
                    <b>Editar perfil</b>
                    <button class="salvar-dialog" id="idEmpresa" value="<?=$cliente_id?>" name="id">SALVAR</button>
                </span>
                <?php foreach ($resultado as $resultado) {?>
                <div class="componentes-perfil-dialog">
                    <label for="imagem-fundo" style="cursor: pointer;"> <img class="fundo-empresa-dialog" src="fotosEmpresa/perfil/<?=$resultado[16]?>"></label>
                    <input id="imagem-fundo" type="file" style="display: none;" name="imagem-fundo" value="<?=$resultado[16]?>">
                    <div class="conteiner-descricao-dialog">


                            <label for="imagem-perfil" style="cursor: pointer;"> <img class="foto-perfil-dialog" src="fotosEmpresa/perfil/<?=$resultado[10]?>"></img> </label>
                            <input id="imagem-perfil" type="file" style="display: none;" value="<?=$resultado[10]?>" name="imagem-perfil">

                    </div>
                </div>
                <div class="dialog-corpo-inputs" >
                    <label class="campos-inputs-label" for="nome">NOME
                        <input class="campos-inputs-text" placeholder="<?=$resultado[3]?>" type="text" id="nome" name="nome" value="<?=$resultado[3]?>">
                    </label>
                    <label class="campos-inputs-label" for="email">EMAIL
                        <input class="campos-inputs-text" placeholder="<?=$resultado[1]?>" type="text" id="email" name="email" value="<?=$resultado[1]?>">
                    </label>

                    <label class="campos-inputs-label" for="telefone">TELEFONE:
                        <input class="campos-inputs-text" placeholder="<?=$resultado[19]?>" type="tell" id="telefone" name="telefone" value="<?=$resultado[19]?>">
                    </label>

                    <label class="campos-inputs-label" for="cnpj">CNPJ
                        <input class="campos-inputs-text" placeholder=" <?=$resultado[4]?>" type="text" id="cnpj" name="cnpj" value="<?=$resultado[4]?>">
                    </label>
                    <label class="campos-inputs-label" for="cep">CEP
                        <input class="campos-inputs-text" placeholder="<?=$resultado[5]?>" type="text" id="cep" name="cep" value="<?=$resultado[5]?>">
                    </label>
                    <label class="campos-inputs-label" for="logradouro">LOGRADOURO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[6]?>" type="text" id="logradouro" name="logradouro" value="<?=$resultado[6]?>">
                    </label>
                    <label class="campos-inputs-label" for="numero">NUMERO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[7]?>" type="text" id="numero" name="numero" value="<?=$resultado[7]?>">
                    </label>
                    <label class="campos-inputs-label" for="bairro">BAIRRO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[8]?>" type="text" id="bairro" name="bairro" value="<?=$resultado[8]?>">
                    </label>
                    <label class="campos-inputs-label" for="estado">ESTADO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[9]?>" type="text" id="estado" name="estado" value="<?=$resultado[9]?>">
                    </label>
                    <label class="campos-inputs-label" for="departamento">DEPARTAMENTO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[13]?>" type="text" id="departamento" name="departamento" value="<?=$resultado[13]?>">
                    </label>

                    <label class="campos-inputs-label" for="descricao">DESCRICAO
                        <input class="campos-inputs-text"  placeholder="<?=$resultado[14]?>" type="text" id="descricao" name="descricao" value="<?=$resultado[14]?> ">
                    </label>

                    <label class="campos-inputs-label" for="ano">ANO
                        <input class="campos-inputs-text" placeholder="<?=$resultado[15]?>" type="text" id="ano" name="ano" value="<?=$resultado[15]?>">
                    </label>

                </div>


            </div>
        </form>
    </dialog>

    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <div class="componentes-perfil">
            <img class="fundo-empresa" src="fotosEmpresa/perfil/<?=$resultado[16]?>">

            <div class="conteiner-descricao">

                <img class="foto-perfil" src="fotosEmpresa/perfil/<?=$resultado[10]?>"></img>
                <div class="descricao-conta">
                    <p class="nome-perfil"><?=$resultado[3]?></p>
                    <p class="tipo-perfil"> Empresa de tecnologia</p>
                </div>
                <div class="div-botao"> <button onclick="modalrequisito()" class="botao-editar">EDITAR PERFIL</button></div>

            </div>
        </div>

        <section class="cards-perfil">

            <div class="card">
                <div class="card-corpo">
                    <div class="card-itens">

                        <p class="titulo-descricao"> Email </p>
                        <p class="conteudo-descricao"> <?=$resultado[1]?></p>

                        <p class="titulo-descricao"> CPNJ</p>
                        <p class="conteudo-descricao"> <?=$resultado[4]?></p>


                    <p class="titulo-descricao"> Derpatamento</p>
                    <p class="conteudo-descricao"><?=$resultado[13]?></p>

                    <p class="titulo-descricao"> Descricao</p>
                    <p class="conteudo-descricao"><?=$resultado[14]?></p>

                    <p class="titulo-descricao"> Ano de origem </p>
                    <p class="conteudo-descricao"><?=$resultado[15]?></p>




                    <p class="titulo-descricao"> Telefone</p>
                    <p class="conteudo-descricao"><?=$resultado[19]?></p>




                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-corpo">
                    <div class="card-itens">
                        <p class="titulo-descricao"> Localizacao</p>
                        <p class="conteudo-descricao"> <?=$resultado[9]?> , <?=$resultado[6]?>, <?=$resultado[7]?>, <?=$resultado[9]?> , <?=$resultado[5]?> </p>
                        <span>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14632.732484011547!2d-46.67088371218347!3d-23.525915236928455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce580f7c039a63%3A0xcf365b1a0b3158be!2sBarra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1690229585202!5m2!1spt-BR!2sbr"
                                 width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </span>

                    </div>
                </div>

            </div>


            <?php }?>

        </section>



    </main>


    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>