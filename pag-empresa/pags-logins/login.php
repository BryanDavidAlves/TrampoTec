
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
                   <div> <img class="imagem-ilustra" src="../img/2.png" alt="foto do aluno"></div>
                </div>

                <div class="linha"> </div>

                <div class="card-itens">
                    <div class="container">
                        <div class="textos-cards">
                            <p class="titulo-um"> Login</p><br>
                            <p class="titulo-dois"> Entre na sua conta</p>
                        </div>

                        <div class="itens-agendar"> 
                            <div>
                            <form action="../beck-end/login/valida_login.php" method="post">
                                <p class="titulo-agendar"> EMAIL </p>   
                                    <div class="barra-agendar">
                                        <input type="email" placeholder="." require_once name="email">
                                    </div> 
                            </div>
                    
                            <div>
                                <p class="titulo-agendar"> SENHA </p>   
                                    <div class="barra-agendar">
                                        <input type="password"  placeholder="" require_once name="senha">
                                    </div> 
                            </div>


                            </div>
                                        
                            <div class="link-senha">
                            <?php 
                            if(isset($_GET['login']) && $_GET['login'] == "erro"){
                            ?>
                            <div class="text-danger">
                                Usuario ou senha Inválidos
                            </div> 
                            <?php  
                            }
                            ?>
                            <?php
                            if(isset($_GET['login']) && $_GET['login'] == "aguardoConfirmacao"){
                            ?>
                            <div class="text-danger">
                                Acesso em Aguardo
                            </div> 
                            <?php  
                            }
                            ?><br>
                        <button type="submit" class="botao-agendar"> <h6 class="corBotao">LOGIN<h6> </button>
                        <br><a class="link" href="./redefinir-senha.php"> esqueceu a senha ? </a>
                        <br>
                        <a class="link" href="./criar-login.php"> nao é cadastrado ? crie agora </a>
                    </div>
                           
                    </form>
                    </div>
                </div>
    </div>

</section>
    
</body>
</html>