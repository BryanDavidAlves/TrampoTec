<?php include('../../dao/conexao.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../reset.css">
    <link rel='stylesheet' href='../../pag-empresa/css/logiN.css'>
    <title>TrampoTec</title>
</head>

<body>

<img class="cima" src="../img/imagemfundocima.png">

<img class="baixo" src="../img/imagemfundobaixo.png">

    <section class="cards-meio">

        <div class="card">

            <div class="imagens">
                <div> <img class="logo" src="../img/trampotec-logo.png" alt="foto do aluno"></div>
                <div> <img class="imagem-ilustra" src="../img/1.png" alt="foto do aluno"></div>
                <div> </div>
            </div>

            <div class="linha"> </div>

            <div class="card-itens">
                <div class="itens-agendar">
                    <form method="post" action="salvarCriarLogin.php">
                        <div>
                            <div>
                                <p class="titulo-agendar"> CEP </p>
                                <div class="barra-agendar">
                                    <input type="password" placeholder="" name="cep">
                                </div>
                            </div>
                            <p class="titulo-agendar"> LOGRADOURO </p>
                            <div class="barra-agendar">
                                <input type="text" placeholder="." cep="logradouro">
                            </div>
                        </div>
                        <div>
                            <p class="titulo-agendar"> NUMERO </p>
                            <div class="barra-agendar">
                                <input type="text" placeholder="" name="numero">
                            </div>
                        </div>
                        <div>
                            <p class="titulo-agendar"> BAIRRO </p>
                            <div class="barra-agendar">
                                <input type="password" placeholder="" name="bairro"> 
                            </div>
                        </div>

                        <div>
                            <p class="titulo-agendar"> ESTADO </p>
                            <div class="barra-agendar">
                                <input type="text" placeholder="" name="estado">
                            </div>
                        </div>

                        <div>
                            <p class="titulo-agendar"><label for="arquivo"> SELECIONE UMA IMAGEM</label> </p>
                            <div class="barra-file">

                                <input type="file" id="arquivo" name="foto_usuario">
                            </div>
                        </div>
                </div>
                <input type="submit" class=" btn btn-success" value="Salvar">

                </form>

            </div>
        </div>

    </section>

</body>

</html>