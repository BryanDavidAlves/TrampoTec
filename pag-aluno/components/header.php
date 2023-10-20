    <header>
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
    height: 30%;
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

}

.logo img{
    margin-top: 2%;
    width: 280px;
    height: 100px;
    margin-left: 27%;

}

.menu ul li{
    display: inline-block;
    padding: 0 50px;
    cursor: pointer;
    font-size: 20px;
    font-weight: 700;
    line-height: 80px;
    align-items: center;
    color: black;
}

.menu{
    margin-left: 4%;
    margin-top: 2%;
}

.login-btn{
    font-size: 19px;
    font-weight: 700;
    border-radius: 30px;
    background-color: #f3ef51;
    padding: 8px 40px;
    margin-right: 13%;
    color: black;
}

        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

<div class="header">
     <div class="navbar">
         <div class="logo">
             <a href="#"><img src="../pag-aluno/img/trampotec-logo.png"></a>
         </div>
         <div class="menu">
             <ul>
         <a href="index.php"><li>Home</li></a>
         <a href="processos-seletivos.php"><li>Pocesso seletivo</li>
         <a href="curriculo.php"> <li>Vagas</li>
         <a href="curriculo.php"> <li>Recomendações</li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Meu Perfil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         </div>
         <!-- <div class="login-btn">Notificações</div>
     </div>    -->
    </header>

