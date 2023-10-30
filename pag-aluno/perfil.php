<?php
include '../dao/conexao.php';
require_once "./back-end/login/validador_acesso.php";

$id_aluno = $_SESSION["idAluno"];

$querySelect = "SELECT tb_aluno.* , tb_telefone_aluno.* /*tb_aluno_curso.*/
FROM tb_aluno
INNER JOIN tb_telefone_aluno ON tb_telefone_aluno.fk_idAluno = tb_aluno.idAluno
/*INNER JOIN tb_aluno_curso ON tb_aluno_curso.fk_idAluno= tb_aluno.idAluno*/
    WHERE tb_aluno.idAluno= '$id_aluno'
";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/perfil.css">
    <title>Meu Perfil</title>
</head>

<body>
    <?php
include '../pag-aluno/components/header.php';
?>
    <main id="main">
        <div class="align">
            <section class="infos">
                <h1>PERFIL</h1>
                <div class="box">
                    <div id="carouselExampleDark" class="carousel slide">


                        <form action="./back-end/update/update.php" method="post">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h5>INFORMAÇÕES PESSOAIS</h5>
                                    <?php foreach ($resultado as $resultado) {?><?php }?>
                                    <div class="container">
                                        <section id="info-pessoal" class="info-pessoal">

                                            <div class="one-bar">

                                                <h3>NOME COMPLETO: </h3>
                                                <input id="inputNome" type="text" disabled
                                                    name="nome" value="<?=$resultado[3]?>">
                                            </div>

                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3 class="titulo-nasc">DATA DE NASC:</h3>
                                                    <input id="inputNasc" name="nasc-aluno" type="text" disabled value="<?=$resultado[5]?>">

                                                </div>
                                                <div class="bar">
                                                    <h3>CPF:</h3>
                                                    <input id="inputCpf" name="cdp-aluno" type="text" disabled value="<?=$resultado[4]?>">
                                                </div>
                                            </div>

                                            <div class="two-bars">
                                                <div class="bar">
                                                    <h3>CELULAR:</h3>
                                                    <input id="inputCelular" type="text" disabled
                                                        value="<?=$resultado[16]?>" name="telefone">
                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>TELEFONE: </h3>
                                                    <input id="inputTelefone" type="text" disabled
                                                        value="(11)2552-3735" name="celular">
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
                                                        value="<?=$resultado[6]?>" name="logradouro">
                                                </span>

                                            </div>
                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3>BAIRRO:</h3>
                                                    <input id="inputBairro" type="text" disabled
                                                        value="<?=$resultado[9]?>" name="bairro">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>ESTADO: </h3>
                                                    <input id="inputEstado" type="text" disabled value="<?=$resultado[7]?>" name="estado">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>
                                            </div>
                                            <div class="three-bars">

                                                <div class="bar">
                                                    <h3>CEP:</h3>
                                                    <input id="inputCep" type="text" disabled value="<?=$resultado[9]?>" name="cep">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>NUMERO: </h3>
                                                    <input id="inputNumero" type="text"  disabled value="<?=$resultado[7]?>" name="numero">

                                                    <!--fazer o js para possibilitar o edit-->
                                                </div>

                                                <div class="bar">
                                                    <h3>COMPLEMENTO: </h3>
                                                    <input id="inputComplemento" type="text" disabled value="<?=$resultado[8]?>" name="complemento">

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
                                                <h4><?=$resultado[1]?></h4>
                                            </div>




                                            <div class="two-bars">

                                                <div class="bar">
                                                    <h3 class="senha">SENHA ATUAL:</h3>
                                                    <input type="password" disabled value="<?=$resultado[2]?>" name="senha" placeholder="Digite sua nova senha ">

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
                            <button type="submit" class="btn-salvar"  value="<?=$id_aluno?>" name="id">
                                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    <h3>Salvar</h3>
                                </button>
                                <span onclick="habInput()" class="btn-editar " >
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
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/hab-input.js"></script>
</body>

</html>