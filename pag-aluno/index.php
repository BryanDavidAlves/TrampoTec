<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

             
      .banner{
          width: 80%;
          height: 70%;
          position: absolute;

          left: 150px;
          color: #fff;
      }
      
      .app-text{
          width: 50%;
          float: left;
          padding-left: 50px;
      }
      
      .app-text h3{
          margin-top: 100px;
          font-size: 19px;
          color: #000;
          font-weight: 400;
          letter-spacing: 2px;
          text-transform: uppercase;
      }
      
      .app-text h1{
          font-size: 51px;
          position: relative;
          color: #000;
          margin-top: 30px;
          font-weight: 700;
          line-height: 1;
      }
      
      .app-text p{
        margin-top: 6%;
          font-size: 20px;
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
          color: #000;
          text-align: center;
          font-size: 15px;
          font-weight: 700;
          border-radius: 32px;
          background-color: #ffa037;
          padding: 15px 50px;
      }
      
      .btn-group .play-btn{
          margin-left: 40px;
          display: inline-flex;
      }
      
      .btn-group span{
          color: #000;
          font-size: 15px;
          font-weight: 700;
          margin: auto 20px;
          cursor: pointer;
      }
      
      .play-btn-inner{
          height: 50px;
          width: 50px;
          border: 2px solid transparent;
          border-radius: 50%;
          background-color: #000;
      }
      
      .play-btn-inner i{
          padding: 15px 19px;
          font-size: 16px;
          cursor: pointer;
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
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>

    <div class="banner">
         <div class="app-text">
             <h3>Bem Vindo(a) ao TrampoTec</h3>
             <h1>Ingressando você<br>no mercado de trabalho </h1>
             <p>Da sala de aula para o mercado de trabalho, de maneira facíl, rápida e segura.</p>

             <div class="btn-group">
                 <div class="signup-btn">Crie seu currículo</div>
                 <div class="play-btn">
                     <div class="play-btn-inner">
                         <i class="fa fa-play"></i>
                     </div>
                     <span>Vagas</span>
                 </div>
             </div>
         </div>
         <div class="app-picture">
             <img src="img/img-home.png">
         </div>
     </div>
</body>

</html>