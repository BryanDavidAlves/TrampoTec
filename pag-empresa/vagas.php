<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="stylesheet" href="../reset.css">
<link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
<link rel='stylesheet' href='../pag-empresa/css/vaga.css'>
<title>TrampoTec</title>
</head>
<body>
    
<?php include ('../pag-empresa/componentes/sidebar.php')?>
<?php include ('../pag-empresa/componentes/rightbar-vagas.php')?>
<?php include ('../pag-empresa/componentes/email.php')?>
<?php include ('../pag-empresa/componentes/notificacao.php')?>

<main class="main">

        <span class="titulo-pagina"> <a class="link-add" href=""><i class="icon-add fa-solid fa-plus fa-2xl"></i></a> <p>Cadastras nova vaga </p></span>
        
        <section class="cards-alunos">

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            <div class="tres-pontinhos">
                    <a onclick="modal3()" class="seta-dropdown"> <i class="fa-solid fa-pen"></i> </a>
                          
                    <div > 
                
                            <div class="modal-aluno" id="abrirvaga">
                                <div class="card-modal-aluno">
                                <a href="#" class="link-modal"><i class="icon-modal fa-regular fa-pen-to-square"></i> Alterar</a>
                                  <span></span>
                                <a href="#" class="link-modal"><i class="icon-modal fa-solid fa-trash"></i> Excluir</a>
                            </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            
            <div class="tres-pontinhos">
                    <a href="#"> <i class="fa-solid fa-pen"></i> </a>
            </div>
            
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            <div class="tres-pontinhos">
                    <a href="#"> <i class="fa-solid fa-pen"></i> </a>
            </div>
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            
            <div class="tres-pontinhos">
                    <a href="#"> <i class="fa-solid fa-pen"></i> </a>
            </div>
            
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            <div class="tres-pontinhos">
                    <a href="#"> <i class="fa-solid fa-pen"></i> </a>
              
            </div>
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-vaga" src="./img/fotodeempresa.avif" alt="foto da empresa da vaga">
                </div>
                
                <div class="card-itens">
                    <p class="nome-empresa"> Cisco system</p>
                    <p class="nome-vaga"> web designer</p>
                    <p class="localizao-vaga"> <i class="icon-vaga fa-solid fa-location-dot"></i> barra funda - sao paulo</p>
                    <p class="mobilidade-preço"> <span> <i class="icon-vaga fa-solid fa-bag-shopping"></i> remoto </span> <span> <i class="icon-vaga fa-solid fa-money-bill"></i> R$ 5.000 </span></p>
                </div>
            </div>
            
            <div class="tres-pontinhos">
                    <a href="#"> <i class="fa-solid fa-pen"></i> </a>
            </div>
            
        </div>

</section>
 </main>
 <script src="./js/java-empresa.js"></script>
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>