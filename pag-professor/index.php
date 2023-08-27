


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/indicacar.css">
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
                <a id="align-icon" href="#" onclick="abrir()" > <i  class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i> </a>
                    <div class="modal" id="abrir-modal">
                        <div class="card-modal" id="card-modal">
                            <a href="#abrir-indicacao" onclick="abrirIndicacao()"><i class="fa-solid fa-check fa-lg" style="color: #739ee8;"></i><p>Indicar</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-user-lock tam-user"  style="color: #739ee8;"></i><p>Negar indicaçao</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-xmark fa-lg" style="color: #739ee8;"></i><p>Fechar indicação</p></a>
                        </div>
                    </div>  
                        <div  class="card-indicacao" id="abrir-indicacao">
                            <div class="align-card-indicacao">
                                <h5 class="title-indicacao">Carta de Indicação</h5>
                                    <form class="" action="index.php">
                                        <label for="destinatario">Destinatario</label>
                                        <input type="email" name="email-professor" id="" >
                                        <br>
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                                        <div class="align-botao">
                                            <input type="submit" value="Enviar" class="botao-indicacao">
                                        </div> 
                                    </form>
                            </div>
                        </div>
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
                <a id="align-icon" href="#" onclick="abrir2()"> <i  class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i> </a>
                    <div class="modal2" id="abrir-modal2">
                        <div class="card-modal" id="card-modal">
                            <a href="#abrir-indicacao" onclick="abrirIndicacao()"><i class="fa-solid fa-check fa-lg" style="color: #739ee8;"></i><p>Indicar</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-user-lock tam-user"  style="color: #739ee8;"></i><p>Negar indicaçao</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-xmark fa-lg" style="color: #739ee8;"></i><p>Fechar indicação</p></a>
                        </div>
                    </div>  
                        <div  class="card-indicacao" id="abrir-indicacao">
                            <div class="align-card-indicacao">
                                <h5 class="title-indicacao">Carta de Indicação</h5>
                                    <form class="" action="index.php">
                                        <label for="destinatario">Destinatario</label>
                                        <input type="email" name="email-professor" id="" >
                                        <br>
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                                        <div class="align-botao">
                                            <input type="submit" value="Enviar" class="botao-indicacao">
                                        </div> 
                                    </form>
                            </div>
                        </div>
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
                <a id="align-icon" href="#card-modal" onclick="abrir3()"> <i  class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i> </a>
                    <div class="modal3" id="abrir-modal3">
                        <div class="card-modal" id="card-modal">
                            <a href="#abrir-indicacao" onclick="abrirIndicacao()"><i class="fa-solid fa-check fa-lg" style="color: #739ee8;"></i><p>Indicar</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-user-lock tam-user"  style="color: #739ee8;"></i><p>Negar indicaçao</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-xmark fa-lg" style="color: #739ee8;"></i><p>Fechar indicação</p></a>
                        </div>
                    </div>  
                        <div  class="card-indicacao" id="abrir-indicacao">
                            <div class="align-card-indicacao">
                                <h5 class="title-indicacao">Carta de Indicação</h5>
                                    <form class="" action="index.php">
                                        <label for="destinatario">Destinatario</label>
                                        <input type="email" name="email-professor" id="" >
                                        <br>
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                                        <div class="align-botao">
                                            <input type="submit" value="Enviar" class="botao-indicacao">
                                        </div> 
                                    </form>
                            </div>
                        </div>
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
                <a id="align-icon" href="#card-modal" onclick="abrir4()"> <i  class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i> </a>
                    <div class="modal4" id="abrir-modal4">
                        <div class="card-modal" id="card-modal">
                            <a href="#abrir-indicacao" onclick="abrirIndicacao()"><i class="fa-solid fa-check fa-lg" style="color: #739ee8;"></i><p>Indicar</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-user-lock tam-user"  style="color: #739ee8;"></i><p>Negar indicaçao</p></a>
                            <div class="linha"> </div>
                            <a href="index.php" ><i class="fa-solid fa-xmark fa-lg" style="color: #739ee8;"></i><p>Fechar indicação</p></a>
                        </div>
                    </div>  
                        <div  class="card-indicacao" id="abrir-indicacao">
                            <div class="align-card-indicacao">
                                <h5 class="title-indicacao">Carta de Indicação</h5>
                                    <form class="" action="index.php">
                                        <label for="destinatario">Destinatario</label>
                                        <input type="email" name="email-professor" id="" >
                                        <br>
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>
                                        <div class="align-botao">
                                            <input type="submit" value="Enviar" class="botao-indicacao">
                                        </div> 
                                    </form>
                            </div>
                        </div>
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
<script>
    function abrir(){
            
            var modal=  document.getElementById('abrir-modal')
            modal.style.display="block"
            console.log('salve')
             

         
     }
     function abrir2(){
            
            var modal2=  document.getElementById('abrir-modal2')
            modal2.style.display="block"
            console.log('salve')
             

         
     }
     function abrir3(){
            
            var modal3=  document.getElementById('abrir-modal3')
            modal3.style.display="block"
    
            console.log('salve')
             

         
     }
     function abrir4(){
            
            var modal4=  document.getElementById('abrir-modal4')
            modal4.style.display="block"
            console.log('salve')
             

         
     }
     function abrirIndicacao(){
            var indicar = document.getElementById('abrir-indicacao')
            indicar.style.display="block";
        }
</script>
</body>
</html>