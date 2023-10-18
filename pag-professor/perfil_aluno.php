<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/perfil_aluno.css">
    <link rel="stylesheet" href="css/geral.css">

    <title>Document</title>
</head>
<body>
    <?php
include '../pag-professor/components/sidebar.php';
?>

<main>
    <div class="align-btn">
        <a href="./alunos.php"><i class="fa-solid fa-chevron-left"></i> </a> <h3  class="titulo-perfil">Perfil Aluno</h3>
    </div>

    <div class="img-cima">
        <img src="img/fundo 2.png" alt="">
    </div>

    <div class="container-perfil">
        <div class="img-perfil">
            <img src="img/bryan.jpg" alt="">
        </div>

        <div class="sobre-perfil">
            <p class="padrao-perfil">Nome</p>
            <p class="nome-perfil">Bryan</p>

            <p class="padrao-perfil">Email</p>
            <p class="nome-perfil">bryan.alves44@etec.sp.gov.br</p>

            <p class="padrao-perfil">Cursos</p>
            <p class="nome-perfil">Desenvolvimento de Sistemas</p>
        </div>
    </div>

    <div class="img-baixo">
        <img src="img/fundo 1.png" alt="">
    </div>
 </main>
<script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>
</html>