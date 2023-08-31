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
<link rel='stylesheet' href='../pag-empresa/css/config.css'>
<title>TrampoTec</title>
</head>
<body >
    
<?php include ('../pag-empresa/componentes/sidebar.php')?>
<?php include ('../pag-empresa/componentes/email.php')?>
<?php include ('../pag-empresa/componentes/notificacao.php')?>
<img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">

<main class="main">
<div class="container-icon">
     <a class="link-add" href="./"> <i class="icon-add fa-solid fa-circle-chevron-left"></i> </a>
</div>


<section class="divs-configs">


<a class="card" href="editar.php">
            <div class="card-corpo">
                <div class="card-itens">
                    <i class="icon-config fa-regular fa-user"></i>
                        <p class="nome-config"> Conta</p>
                 
                </div>
            </div>  
                <div class="tres-pontinhos">
                <i class="fa-solid fa-angle-right"></i>
                </div>
</a>    

<br><p class="titulo-config"> Configuracoes gerais </p><br>

<a class="card" >
            <div class="card-corpo">
                <div class="card-itens">
                <i class="icon-config fa-solid fa-moon"></i>
                        <p class="nome-config"> Modo Escuro</p>
                 
                </div>
            </div>  
            <div class="container">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label class="switch" for="checkbox">
                <span class="slider"></span>
            </label>
           </div>
</a> 

<a class="card" href="fale-conosco.php">
            <div class="card-corpo">
                <div class="card-itens">
                <i class="icon-config fa-solid fa-question"></i>
                        <p class="nome-config"> Fale Conosco</p>
                 
                </div>
            </div>  
                <div class="tres-pontinhos">
                 <i class="fa-solid fa-angle-right"></i>
                </div>
</a> 

    

</section>

  
 </main>
 <script src="./js/java-empresa.js"></script>
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>