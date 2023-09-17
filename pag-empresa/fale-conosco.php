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
<link rel='stylesheet' href='../pag-empresa/css/conosco.css'>
<title>TrampoTec</title>
</head>
<body>
    

<?php include ('../pag-empresa/componentes/sidebar.php')?>
<?php include ('../pag-empresa/componentes/email.php')?>
<?php include ('../pag-empresa/componentes/notificacao.php')?>


<main class="main">

<span class="container-icon">
     <a class="link-add" href="./configuracoes.php"> <i class="icon-add fa-solid fa-circle-chevron-left"></i></a> <span> Fale-Conosco </span> 
</span>


<p class="titulo-config"> • Entre em contato para esclarecimento</p> <br>

<form class="textos">

<textarea class="caixa-texto" name="" id="" cols="30" rows="50"></textarea>

<button class="botao-fale"> <i class="icon-enviar fa-solid fa-location-arrow"></i> </button>

</form>      

    
 </main>
 <script src="./js/java-empresa.js"></script>
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>