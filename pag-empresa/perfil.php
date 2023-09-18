<?php
include('../dao/conexao.php');

require_once "./beck-end/login/validador_acesso.php";



// Pega o ID do cliente logado
$cliente_id = $_SESSION['idEmpresa'];

$querySelect = "SELECT * FROM  tb_empresa WHERE idEmpresa = $cliente_id";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();

    


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="stylesheet" href="../reset.css">
<link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
<link rel='stylesheet' href='../pag-empresa/css/perfil.css'>
<title>TrampoTec</title>
</head>
<body>
    
<?php include ('../pag-empresa/componentes/sidebar.php')?>
<?php include ('../pag-empresa/componentes/email.php')?>
<?php include ('../pag-empresa/componentes/notificacao.php')?>
<img class="baixo" src="./img/fundo1.png" alt="">
<main class="main">

    <div class="componentes-perfil">
    <img class="fundo-empresa" src="./img/fundo-empresa.jpg">
        
        <div class="conteiner-descricao"> 
        <?php foreach($resultado as $resultado ) { ?>
            <img class="foto-perfil" src="fotosEmpresa/perfil/<?= $resultado[10] ?>"></img>
            <div class="descricao-conta"> 
               
                <p class="nome-perfil"><?= $resultado[3] ?></p> 
                <p class="tipo-perfil"> Empresa de tecnologia</p> 
            </div>
        </div>
    </div>

<section class="cards-perfil">

        <div class="card">
            <div class="card-corpo">
                    <div class="card-itens">

                         <p class="titulo-descricao"> Email </p>
                        <p class="conteudo-descricao"> <?= $resultado[1] ?></p>    

                        <p class="titulo-descricao"> CPNJ</p>
                        <p class="conteudo-descricao"> <?= $resultado[4] ?></p>    
                        <?php }?> 

                        <p class="titulo-descricao"> Derpatamento</p>
                        <p class="conteudo-descricao"> Tecnologia</p>      
                        
                        <p class="titulo-descricao"> Descricao</p>
                        <p class="conteudo-descricao"> multinacional no ramo da tecnologia, atuando no mercado  internacional </p>    

                        <p class="titulo-descricao"> Ano de origem </p>
                        <p class="conteudo-descricao"> desde de 1998</p>    

                       


                        <p class="titulo-descricao"> Telefone</p>
                        <p class="conteudo-descricao"> (11) 9582819-11</p>    



       
                    </div>
            </div>
        </div>

        <div class="card">
            <div class="card-corpo">
                    <div class="card-itens">

                    <p class="titulo-descricao"> Localizacao</p>
                        <p class="conteudo-descricao"> Palmeira - barra funda, rua bento teobaldo ferraz, 119 - barra funda, sao paulo - SP , 01156-001 </p>  
                       <span> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14632.732484011547!2d-46.67088371218347!3d-23.525915236928455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce580f7c039a63%3A0xcf365b1a0b3158be!2sBarra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1690229585202!5m2!1spt-BR!2sbr"
                             width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe> </span>
       
                    </div>
            </div>
        </div>


  
</section>



 </main>

 
 <script src="./js/java-empresa.js"></script>
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>