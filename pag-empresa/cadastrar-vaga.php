<?php
require_once "./beck-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/cadastrar-vaga.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>

    <dialog id="requisito" class="dialog-requisitos">
    
            <form class="form-requisitos" >
                <div class="inputs-dialog">
                    <label for="requisito">REQUISITOS PARA VAGA <i onclick="modalrequisito()" class="fa-solid fa-circle-xmark"></i></label>
                    <textarea type="text" name="requisito"></textarea>
                    <button class="botao-dialog"  type="submit">ADICIONAR</button>
                </div>
            </form>
        </dialog>

    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">
 
        <a href="./vagas.php"><i class="fa-solid fa-chevron-left"></i> Cadastro de Vagas</a>
        
  
        <section class="formulario-cadastrar-vaga">
            <form action="beck-end/cadastroVaga/salvarCadastroVaga.php" method="post">
           
            <h1>FORMULARIO DE CADASTRO DE VAGA</h1>

                <div class="alinhaento-inputs">

                    <div>
                        <span>
                            <label for="nome">NOME</label>
                            <input name="nome" type="text">

                        </span>

                        <span>
                            <label for="cidade">CIDADE</label>
                            <input name="cidade" type="text">
                        </span>
                    </div>

                    <div>
                        <span>
                            <label for="bairro">BAIRRO</label>
                            <input name="bairro" type="text">
                        </span>


                        <span>
                            <label for="tipo">TIPO TRABALHO</label>
                            <input name="tipo" type="text">
                        </span>
                    </div>

                    <div>
                        <span>
                            <label for="salario">SALARIO</label>
                            <input name="salario" type="number">
                        </span>

                        <span>
                            <label for="curso">CURSO</label>
                            <input name="curso" type="text">

                        </span>

                    </div>

                    <div>
                        <span>
                            <label for="descricao">DESCRIÇÃO</label>
                            <input class="descricao" name="descricao" type="text">
                        </span>

                    </div>

                    <div>
                        <span>
                            <label for="area">AREA</label>
                            <input name="area" type="text">
                        </span>

                        <span>
                            <label for="periodo">PERIODO</label>
                            <input name="periodo" type="text">
                        </span>
                    </div>



                    <div>
                        <span>
                            <label for="inicio">INICIO</label>
                            <input name="inicio" type="time">
                        </span>

                        <span>
                            <label for="termino">TERMINO</label>
                            <input name="termino" type="time">
                        </span>
                    </div>

                </div>



                <table class="requisitos-caixa">
                    <thead>
                        <tr>
                            <th>
                                <i onclick="modalrequisito()"  class="add-requisito fa-solid fa-circle-plus"></i> ADICIONAR REQUISITO
                            </th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td>JavaScript </td>

                        </tr>


                    </tbody>

                </table>
                <?php
                            if(isset($_GET['CadastroVaga']) && $_GET['CadastroVaga'] == "erro"){
                            ?>
                            <div class="text-danger">
                               Erro ao Cadastrar Vaga
                            </div> 
                            <?php  
                            }
                            ?>
                <button class="botao-vaga" type="submit">CADASTRAR</button>
            </form>



        </section>



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>