<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}

a{
    text-decoration: none;
}

ul{
    list-style: none;
}

.header{
    width: 100%;
    height: 60vh;
    background-color: #fff;
    position: relative;
}

.header .navbar{
    width: 100%;
    height: 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    margin-top: 30px;
}

.logo img{
    margin-left: 100px;
}

.menu ul li{
    display: inline-block;
    padding: 0 25px;
    cursor: pointer;
    font-size: 19px;
    font-weight: 700;
    line-height: 80px;
    align-items: center;
}

.login-btn{
    display: block;
    font-size: 19px;
    font-weight: 700;
    cursor: pointer;
    border-radius: 30px;
    background-color: #f3ef51;
    padding: 8px 40px;
    margin-right: 100px;
}

.banner{
    width: 80%;
    height: 70%;
    position: absolute;
    top: 18%;
    left: 150px;
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

.about-services{
    position: absolute;
    top: 125%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
    padding: 0 300px;
}

.about-services ul{
    display: inline-flex;
    margin: 30px auto;
    text-align: center;
}

.about-services ul li{
    margin: 0 50px;
    cursor: pointer;
}

.about-services ul li img{
    width: 120px;
    height: auto;
}

.about-services ul li h1{
    font-size: 20px;
    margin-top: 20px;
}

.about-services ul li p{
    font-size: 15px;
    margin-top: 20px;
    font-weight: 700;
}

.social-icons{
    position: fixed;
    right: 30px;
    top: 30%;
}

.social-icons ul li{
    margin-top: 5px;
    text-align: center;
}

.social-icons ul li a{
    color: #000;
    padding: 10px;
    display: block;
    font-size: 29px;
}

.social-icons ul li a:hover{
    background-color: #220efb;
    color: #fff;
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
    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>

 

     <div class="banner">
         <div class="app-text">
             <h3>Bem vindo(a) ao TrampoTec</h3>
             <h1>Ingresse no<br>mercado de trabalho</h1>
             <p>Coloque em prática seu aprendizado, dentro do ambiente de trabalho.</p>

             <div class="btn-group">
                 <div class="signup-btn">Sign up now</div>
                 <div class="play-btn">
                     <div class="play-btn-inner">
                         <i class="fa fa-play"></i>
                     </div>
                     <span>How it works</span>
                 </div>
             </div>
         </div>
         <div class="app-picture">
             <img src="img/img-home.png">
         </div>
     </div>

     <div class="about-services">
         <ul>
             <li>
                 <img src="images/1.png">
                 <h1>SEO Consultancy</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </li>
             <li>
                 <img src="images/2.png">
                 <h1>Competitor Analysis</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </li>
             <li>
                 <img src="images/3.png">
                 <h1>Social Media Marketing</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </li>
         </ul>
     </div>

     <div class="social-icons">
         <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         </ul>
     </div>
    </div>
</body>
</html>