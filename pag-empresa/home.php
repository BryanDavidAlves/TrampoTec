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
<link rel='stylesheet' href='../pag-empresa/css/Home.css'>
<title>TrampoTec</title>
</head>
<body>
    
<?php include ('../pag-empresa/componentes/sidebar.php')?>
<?php include ('../pag-empresa/componentes/rightbar-home.php')?>
<?php include ('../pag-empresa/componentes/email.php')?>
<?php include ('../pag-empresa/componentes/notificacao.php')?>


<main>
<br>
<p class="titulo-pagina"> perfis de estudantes  </p>


    <section class="cards-alunos">

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-aluno" src="./img/bryan.jpg" alt="foto do aluno">
                </div>
                <div class="card-itens">
                    <p class="nome-aluno"> Bryan David</p>
                    <p class="curso-aluno"> Desenvolvimeto de sistemas</p>
                    <p class="informacao-aluno"> Front-End e Back-End </p>
                    <p class="informacao-aluno"> modalidade : presencial </p>
                    <p class="informacao-aluno"> periodo manha</p>
                </div>
            </div>
            
            <div class="tres-pontinhos" >
                    <a onclick="abrirmodal()"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                    <div class="modal-aluno" id="abrir-aluno">
                        <div class="card-modal-aluno">
                           <a href="#" class="link-modal">Ver Perfil</a>
                        </div>
                    </div>  
            </div>
               
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-aluno" src="./img/bryan.jpg" alt="foto do aluno">
                </div>
                <div class="card-itens">
                    <p class="nome-aluno"> Bryan David</p>
                    <p class="curso-aluno"> Desenvolvimeto de sistemas</p>
                    <p class="informacao-aluno"> Front-End e Back-End </p>
                    <p class="informacao-aluno"> modalidade : presencial </p>
                    <p class="informacao-aluno"> periodo manha</p>
                </div>
            </div>
            
            <div class="tres-pontinhos" >
                    <a onclick="abrirmodal()"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                    <div class="modal-aluno" id="abrir-aluno">
                        <div class="card-modal-aluno">
                           <a href="#" class="link-modal">Ver Perfil</a>
                        </div>
                    </div>  
            </div>
               
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-aluno" src="./img/bryan.jpg" alt="foto do aluno">
                </div>
                <div class="card-itens">
                    <p class="nome-aluno"> Bryan David</p>
                    <p class="curso-aluno"> Desenvolvimeto de sistemas</p>
                    <p class="informacao-aluno"> Front-End e Back-End </p>
                    <p class="informacao-aluno"> modalidade : presencial </p>
                    <p class="informacao-aluno"> periodo manha</p>
                </div>
            </div>
            
            <div class="tres-pontinhos" >
                    <a onclick="abrirmodal()"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                    <div class="modal-aluno" id="abrir-aluno">
                        <div class="card-modal-aluno">
                           <a href="#" class="link-modal">Ver Perfil</a>
                        </div>
                    </div>  
            </div>
               
        </div>

        <div class="card">
            <div class="card-corpo">
                <div class="imagens">
                    <img class="imagem-aluno" src="./img/bryan.jpg" alt="foto do aluno">
                </div>
                <div class="card-itens">
                    <p class="nome-aluno"> Bryan David</p>
                    <p class="curso-aluno"> Desenvolvimeto de sistemas</p>
                    <p class="informacao-aluno"> Front-End e Back-End </p>
                    <p class="informacao-aluno"> modalidade : presencial </p>
                    <p class="informacao-aluno"> periodo manha</p>
                </div>
            </div>
            
            <div class="tres-pontinhos" >
                    <a onclick="abrirmodal()"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                    <div class="modal-aluno" id="abrir-aluno">
                        <div class="card-modal-aluno">
                           <a href="#" class="link-modal">Ver Perfil</a>
                        </div>
                    </div>  
            </div>
               
        </div>


        
    </section>


    
 </main>

<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
<script src="./js/java-empresa.js"></script>
</body>
</html>