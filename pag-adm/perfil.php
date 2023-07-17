<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/perfiil.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Perfil</h1>
        <input type="text" placeholder="Pesquisar">
    </header>
    <main>
        <section class="perfil">
            <div class="body-perfil">
                <img src="img/img-perfil.jpg" alt="">
                <div class="perfil-info">
                    <h2>Nome</h2>
                    <h3>Ana</h3>
                </div>
                <div class="perfil-info">
                    <h2>Email</h2>
                    <h3>ana123@etec.sp.gov.br</h3>
                </div>
                <div class="perfil-info">
                    <h2>Telefone</h2>
                    <h3>(11) 97588-2020</h3>
                </div>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>