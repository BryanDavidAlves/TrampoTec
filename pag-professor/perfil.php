<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/side.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('../pag-professor/components/sidebar.php');
    ?>
    <main>

    <span class="titulo-perfil">Perfil</span>

    <div class="barra-pesquisa">
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >
            <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
        </div>
    </main>
    
    <section class="perfil">
    <div class="alinhar-perfil">
        <div class="imagem-perfil">
            <img src="img/ryan.jpg" alt="Foto de perfil">
        </div>
     
            
            <h3 class="informacao-usuario">Nome</h3>
            <h4 class="nome-usuario">Ryan</h4>

            <h3 class="informacao-usuario">Email</h3>
            <h4 class="nome-usuario">ryan.souza44@etec.sp.gov.br</h4>

            <h3 class="informacao-usuario">Telefone</h3>
            <h4 class="nome-usuario">11984286277</h4>

            <h3 class="informacao-usuario">Disciplinas</h3>
            <h4 class="nome-usuario">Desenvolvimento de Sistemas</h4>
    </div>
    </section>

    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>    
</body>
</html>