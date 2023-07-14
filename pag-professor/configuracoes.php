<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/configuracao.css">
    <link rel="stylesheet" href="css/side.css">
</head>
<body>
    <?php 
    include('../pag-professor/components/sidebar.php');
    ?>

<main>
        <span class="titulo-configuracoes">Configurações</span>  
        <div class="barra-pesquisa">
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >
            <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"> </i>
        </div>
        
    </main>

    <section class="notificacoes">
        <ul>
    <li>
    <a href=""><i class="fa-solid fa-circle-user fa-2xl" style="color: #919191;"></i></a> <p> Alterar E-mail</p>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-circle-user fa-2xl" style="color: #919191;"></i></a> <p> Alterar Nome</p>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-phone fa-2xl" style="color: #919191;"></i></a> <p> Alterar Telefone</p>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-lock fa-2xl" style="color: #919191;"></i></a> <p> Alterar Senha</p>
    </li>

    <li>
    <a href=""><i class="fa-solid fa-book fa-2xl" style="color: #919191;"></i></a> <p> Alterar Disciplinas</p>
    </li>

    </ul>

    
    </section>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>