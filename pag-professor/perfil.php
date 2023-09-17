<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perf.css">
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/geral.css">
    <title>Document</title>
</head>
<body>
    <?php
include '../pag-professor/components/sidebar.php';
?>
    <main>

    <span class="titulo-perfil">Perfil</span>

    <div class="barra-pesquisa">
    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >

    </div>
    <div class="img-cima">
        <img src="img/fundo 2.png" alt="">
    </div>
    </main>

    <section class="perfil">
        <div class="align-button-info"><i id="icon-info" onclick="abrirInfo()" class="fa-solid fa-plus" style="color: #ffffff;">
            </i><h2>Adicionar informaçoes</h2>
        </div>
        <div class="align-card-info"  id="card-info">
        <div class="card-info">


                <form action="perfil.php">
                    <label for="">CODIGO ETEC</label>
                    <input type="number" name="" id="">

                    <label for="">DISCIPLINAS</label>
                    <input type="text" name="" id="">

                    <input class="button-card-info" type="submit" value="Cadastrar">
                </form>

        </div>
        </div>
    <div class="alinhar-perfil">
        <div class="imagem-perfil">
            <img src="img/11.png" alt="Foto de perfil">
        </div>


            <h3 class="informacao-usuario">Nome</h3>
            <h4 class="nome-usuario" >Jose</h4>

            <h3 class="informacao-usuario">Email</h3>
            <h4 class="nome-usuario">jose.souza@etec.sp.gov.br</h4>

            <h3 class="informacao-usuario">Telefone</h3>
            <h4 class="nome-usuario">11984286277</h4>

            <h3 class="informacao-usuario">Disciplinas</h3>
            <h4 class="nome-usuario">Desenvolvimento de Sistemas</h4>
    </div>
    </section>

    <div class="img-baixo">
        <img src="img/fundo 1.png" alt="">
    </div>

    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script>


        function abrirInfo (){
            var informacao = document.getElementById('card-info')
                informacao.style.display = "block"

        }
    </script>
</body>
</html>