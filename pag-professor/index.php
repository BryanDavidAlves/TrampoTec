


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/indicacao.css">
    <link rel="stylesheet" href="css/geral.css">
</head>
<body>
<?php
include('../pag-professor/components/sidebar.php');
?>
    <main class="main">
        <span class="titulo">Indicações para alunos</span>  
        <div class="barra-pesquisa">
        <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >
           
        </div>
        
    </main>

    <section class="filtro">
        <form action="" method="GET" >
        <div class="alinha-filtro">
            <span class="material-symbols-outlined">
            tune
             </span>
            <h3>Filtrar por:</h3>
        </div>

        <div class="alinha-filtro">
                <h3>Nome </h3>
            <select name="nome" id="nome">
                <option value="" ></option>
                <option value="">valor 1</option>
                <option value="">valor 2</option>
                <option value="">valor 3</option>    
            </select>
        </div>
       
        
      
        <div class="alinha-filtro">
            <h3 >E-mail </h3>
            
        <select name="nome" id="nome">
            <option value=""></option>
            <option value="">valor 1</option>
            <option value="">valor 2</option>
            <option value="">valor 3</option>    
        </select>
        </div>
        
        <div class="alinha-filtro">
            <h3 >Código  </h3>
        <select name="nome" id="nome">
            <option value=""></option>
            <option value="">valor 1</option>
            <option value="">valor 2</option>
            <option value="">valor 3</option>    
        </select>
        </div>
        
        
        
        <div class="alinha-filtro">
            <h3 >Cursos </h3>
        <select name="nome" id="nome">
            <option value=""></option>
            <option value="">valor 1</option>
            <option value="">valor 2</option>
            <option value="">valor 3</option>    
        </select>
        </div>

     
          <input class="botao" type="submit" value="Aplicar">

        </form>
</section>
    <section class="estrutura-card">
        <div class="card">
            <div class="imagem-aluno">
                <img src="img/ryan.jpg" alt="">
                <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
            </div>
            <h4 class="nome-aluno">Ryan Souza</h4>
            <div class="alinhar-dados">
            <h3 class="email">E-mail Institucional</h3>
            <h4> ryan.souza44@etec.sp.gov.br</h4>
            
            <h3 class="codigo-etec">Código Etec</h3>
            <h4>118</h4>

            <h3 class="cursos">Cursos</h3>
            <h4>Desenvolvimento de Sistemas</h4>
            </div>
        </div>

        <div class="card">
        <div class="imagem-aluno">
                <img src="img/ryan.jpg" alt="">
                <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
            </div>
            <h4 class="nome-aluno">Ryan Souza</h4>
            <div class="alinhar-dados">
            <h3 class="email">E-mail Institucional</h3>
            <h4> ryan.souza44@etec.sp.gov.br</h4>
            
            <h3 class="codigo-etec">Código Etec</h3>
            <h4>118</h4>

            <h3 class="cursos">Cursos</h3>
            <h4>Desenvolvimento de Sistemas</h4>
            </div>
        </div>

        <div class="card">
            <div class="imagem-aluno">
                <img src="img/ryan.jpg" alt="">
                <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
            </div>
            <h4 class="nome-aluno">Ryan Souza</h4>
            <div class="alinhar-dados">
            <h3 class="email">E-mail Institucional</h3>
            <h4> ryan.souza44@etec.sp.gov.br</h4>
            
            <h3 class="codigo-etec">Código Etec</h3>
            <h4>118</h4>

            <h3 class="cursos">Cursos</h3>
            <h4>Desenvolvimento de Sistemas</h4>
            </div>
        </div>

        <div class="card">
            <div class="imagem-aluno">
                <img src="img/ryan.jpg" alt="">
                <i id="align-icon" class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
            </div>
            <h4 class="nome-aluno">Ryan Souza</h4>
            <div class="alinhar-dados">
            <h3 class="email">E-mail Institucional</h3>
            <h4> ryan.souza44@etec.sp.gov.br</h4>
            
            <h3 class="codigo-etec">Código Etec</h3>
            <h4>118</h4>

            <h3 class="cursos">Cursos</h3>
            <h4>Desenvolvimento de Sistemas</h4>
            </div>
        </div>

       
    </section>

   
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>