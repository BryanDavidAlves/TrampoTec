<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

a{
    text-decoration: none;
}

ul{
    list-style: none;
}


.logo img{
    margin-left: 100px;
}



.banner{
    width: 80%;
    height: 70%;
    position: absolute;
    top: 18%;
    left: 150px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #fff;
}

.app-text{
    width: 50%;
    float: left;
}

.app-text h3{
    margin-top: 100px;
    font-size: 17px;
    color: #000;
    font-weight: 400;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.app-text h1{
    font-size: 51px;
    position: relative;
    color: #000;
    top: 8px;
    font-weight: 700;
    line-height: 1;
    margin-right: 50%;
    width: 100%;
   text-align: justify;
}

.app-text p{
    font-size: 19px;
    margin: 30px 30px 30px 0;
    letter-spacing: 1px;
    color: #000;
    padding-right: 250px;
}

.btn-group{
    display: flex;
    width: 100%;
    position: relative;
}

.btn-group .signup-btn{
    cursor: pointer;
    display: block;
    color: white;
    text-align: center;
    font-size: 15px;
    font-weight: 700;
    border-radius: 32px;
    background-color: red;
    padding: 15px 50px;
}


.app-picture{
    margin-left: 60%;
    width: 90%;
    height: 500%;
}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/home.css">

    <title>Pagina de Vagas</title>    
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/modal-vagas.js"></script> 
</head>

<body>

    
    <?php
    include('../pag-aluno/components/header.php');
    ?>

 

     <div class="banner">
         <div class="app-text">
             <h3>Bem vindo(a) ao TrampoTec</h3>
             <h1>Ingresse no<br>mercado de trabalho</h1>
             <p>Coloque em prática seu aprendizado, dentro do ambiente de trabalho.</p>

             <div class="btn-group">
                 <div class="signup-btn">Crie seu currículo</div>
                 <!-- <div class="play-btn">
                     <div class="play-btn-inner">
                         <i class="fa fa-play"></i>
                     </div>
                     <span>How it works</span>
                 </div> -->
             </div>
         </div>
         <div class="app-picture">
             <img src="img/img-home.png">
         </div>
     </div>
    </div>
</body>
</html>