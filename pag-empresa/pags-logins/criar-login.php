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
                    <div>
                        <p class="titulo-um"> Bem vindo!! Crie sua conta</p><br>
                        <p class="titulo-dois"> ja tem uma conta faça ? seu login</p><br>
                    </div>

                    <div class="itens-agendar">
                        <div>
                        <form method="post" action="../beck-end/cadastro/salvarCadastro.php">
                            <p class="titulo-agendar"> NOME </p>   
                                <div class="barra-agendar">
                                    <input type="text"  placeholder="." name="nome">
                                </div> 
                        </div>
                        <div>
                            <p class="titulo-agendar"> EMAIL </p>   
                                <div class="barra-agendar">
                                    <input type="text"  placeholder="" name="email">
                                </div> 
                        </div>
                        <div>
                            <p class="titulo-agendar"> SENHA </p>   
                                <div class="barra-agendar">
                                    <input type="password"  placeholder="" name="senha">
                                </div> 
                        </div>

                        <div>
                            <p class="titulo-agendar"> CPNJ  </p>   
                                <div class="barra-agendar">
                                    <input type="text"  placeholder="" name="cnpj">
                                </div> 
                        </div>
                        </div>
                        <input type="submit" class=" btn btn-success" value="Salvar">
                        <!--<button class="botao-agendar"><a href="./cadastrar-login.php">PROXIMO</a></button>-->

</form>
                    
                </div>
    </div>

</section>
    
</body>
</html>