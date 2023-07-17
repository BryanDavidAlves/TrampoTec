<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/configuraca.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
    <?php 
    include('../pag-professor/components/sidebar.php');
    ?>

<main>
        <span class="titulo-configuracoes">Configurações</span>  
        <div class="barra-pesquisa">
        <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"> </i>
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >
           
        </div>
        
    </main>

    <section class="notificacoes">
        <ul>
    <li>
    <a href=""><i class="fa-solid fa-circle-user fa-2xl" style="color: #919191;"></i> <p> Alterar E-mail</p> <i id="align-seta" class="fa-solid fa-chevron-right fa-lg" style="color: #787878;"></i></a>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-circle-user fa-2xl" style="color: #919191;"></i>  <p> Alterar Nome</p> <i id="align-seta" class="fa-solid fa-chevron-right fa-lg" style="color: #787878;"></i></a>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-phone fa-2xl" style="color: #919191;"></i> <p> Alterar Telefone</p><i id="align-seta" class="fa-solid fa-chevron-right fa-lg" style="color: #787878;"></i></a>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-lock fa-2xl" style="color: #919191;"></i> <p> Alterar Senha</p><i id="align-seta" class="fa-solid fa-chevron-right fa-lg" style="color: #787878;"></i></a>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-book fa-2xl" style="color: #919191;"></i> <p> Alterar Disciplinas</p><i id="align-seta" class="fa-solid fa-chevron-right fa-lg" style="color: #787878;"></i></a>
    </li>

    </ul>

    
    </section>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>