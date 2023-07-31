<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="stylesheet" href="../reset.css">
<link rel='stylesheet' href='../pag-empresa/componentes/componentes.css'>
<link rel='stylesheet' href='../pag-empresa/css/perfils.css'>
<title>TrampoTec</title>
</head>
<body>
    
<?php include ('../pag-empresa/componentes/navbar.php')?>
<?php include ('../pag-empresa/componentes/sidebar.php')?>

<main class="main">

    <div class="componentes-perfil">
    <img class="fundo-empresa" src="../img/empresafundo.jpg">
        
        <div class="conteiner-descricao"> 
            <img class="foto-perfil" src="../img/fotodeempresa.avif"></img>
            <div class="descricao-conta"> 
                <p class="nome-perfil"> Cisco system </p> 
                <p class="tipo-perfil"> Empresa de tecnologia</p> 
            </div>
        </div>
    </div>

<section class="cards-perfil">

        <div class="card">
            <div class="card-corpo">
                    <div class="card-itens">

                        <p class="titulo-descricao"> Derpatamento</p>
                        <p class="conteudo-descricao"> Tecnologia</p>      
                        
                        <p class="titulo-descricao"> Descricao</p>
                        <p class="conteudo-descricao"> multinacional no ramo da tecnologia, atuando no mercado  internacional </p>    

                        <p class="titulo-descricao"> Ano de origem </p>
                        <p class="conteudo-descricao"> desde de 1998</p>    

                        <p class="titulo-descricao"> Email </p>
                        <p class="conteudo-descricao"> ciscosystem@gmail.com.br </p>    


                        <p class="titulo-descricao"> Telefone</p>
                        <p class="conteudo-descricao"> (11) 9582819-11</p>    


                        <p class="titulo-descricao"> CPNJ</p>
                        <p class="conteudo-descricao"> 19380110750170185081</p>    


       
                    </div>
            </div>
        </div>

        <div class="card">
            <div class="card-corpo">
                    <div class="card-itens">

                    <p class="titulo-descricao"> Localizacao</p>
                        <p class="conteudo-descricao"> Palmeira - barra funda, rua bento teobaldo ferraz, 119 - barra funda, sao paulo - SP , 01156-001 </p>  
                       <span> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14632.732484011547!2d-46.67088371218347!3d-23.525915236928455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce580f7c039a63%3A0xcf365b1a0b3158be!2sBarra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1690229585202!5m2!1spt-BR!2sbr"
                             width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </span>
       
                    </div>
            </div>
        </div>


        <div class="agendar-geral">
        <span class="titulo-pagina"> <a class="link-add" href=""> <i class="icon-add fa-solid fa-plus fa-2xl"></i> </a> <p> Agendar entrevista </p> </span>
                
        <div class="card-agendar">
                    <div class="corpo-agendar">
                        
                
                            <div class="itens-agendar">

                              <div>
                                <form>
                                <p class="titulo-agendar"> Titulo </p>   
                                <div class="barra-agendar">
                                    <input type="text" placeholder="...">
                                </div> 
                             </div>

                              <div>
                                <p class="titulo-agendar"> Horario </p>   
                                <div class="barra-agendar">
                                    <input type="time"  placeholder="...">
                                </div> 
                                </div>
                                <div>
                                <p class="titulo-agendar"> Nome do entrevistado </p>   
                                <div class="barra-agendar">
                                    <input type="text"  placeholder="..">
                                </div> 
                                </div>
                                 <button class="botao-agendar"><a href="">AGENDAR</a></button>
                       </form>
                            </div>
                    </div>
                </div>
        </div>

</section>



 </main>

 

<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>