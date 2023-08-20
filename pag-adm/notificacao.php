<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/notificacoes.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Notificações</h1>
        <input type="text" placeholder="Pesquisar">
    </header>
    <main>
        <section class="notificacoes">
            <div class="notificacao" >
                <i class="fa-solid fa-user-plus"></i>
                <h2>Há novos professores cadastrados. Veja aqui</h2>
            </div>
          
            <div class="notificacao">
                <i class="fa-solid fa-user-plus"></i>
                <h2>Há novas empresas cadastradas. Veja aqui</h2>
            </div>
           
            <div class="notificacao">
                <i class="fa-solid fa-user-plus"></i>
                <h2>Há novos aluno cadastrados. Veja aqui</h2>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>