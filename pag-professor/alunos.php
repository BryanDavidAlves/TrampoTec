
<html lang="en">
<?php
require_once "./back-end/login/validador_acesso.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/alunos.css">
    <link rel="stylesheet" href="css/geral.css">
</head>

<body>
    <?php
include '../pag-professor/components/sidebar.php';
?>
    <main class="main">
        <span class="titulo-vagas"> Pendentes</span>
        <div class="img-cima">
        <img src="img/fundo 2.png" alt="">
        </div>

    </main>
<div class="align-tudo">
    <section class="sistema-busca">
    <div class="barra-pesquisa">
            <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
            <input type="text" name="pesquisa" id="pesquisa" placeholder="">
    </div>
        <div class="align-filtro"  onclick="abrirFiltro()">
            <div class="filtro" >
            <span   class="material-symbols-outlined">
                    tune
            </span>
                <p >Filtrar</p>

            </div>
        </div>
        <div class="modal-filtro" id="abrir-filtro">
            <form action="" >
                <div class="align-form-filtro">
                    <label for="">Periodo</label>
                    <select name="" id="">

                        <option value="">Tarde</option>
                        <option value="">Manhã</option>
                        <option value="">Noite</option>
                    </select>
                    </div>
                    <div class="align-form-filtro">
                    <label for="">Etec</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    <div class="align-form-filtro">
                    <label for="">Curso</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    <div class="align-form-filtro">
                    <label for="">Area</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    <input type="submit" value="Aplicar" class="button-filtro">

            </form>
        </div>

    </section>

    <section class="empresa">

<table>
    <thead>
        <tr class=infos>

            <th class="text-id">ID</th>
            <th>USUARIO</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>PERFIL</th>




        </tr>
    </thead>
    <tbody>
        <tr class="infos">

            <td class="table-id-empresa">1</td>
            <td class="foto-user">
                <img src="img/bryan.jpg" alt="">
            </td>
            <td class="table-nome-empresa">Ryan Dias Rocha de Souza</td>
            <td class="table-email-empresa">ryan.souza44@etec.sp.gov.br</td>
            <td class="table-cnpj"><a href="perfil_aluno.php" class="btn-perfil"><button>VER MAIS</button></a></td>


            <td class="icone-table">
            <div class="icons">

                    <i class="fa-solid fa-xmark" style="color: #e00000;"></i>

                </div>
            </td>


        </tr>

        <tr class="infos">
            <td class="table-id-empresa">2</td>
            <td class="foto-user">
                <img src="img/bryan.jpg" alt="">
            </td>
            <td class="table-nome-empresa">Ryan Dias Rocha de Souza</td>
            <td class="table-email-empresa">ryan.souza44@etec.sp.gov.br</td>
            <td class="table-cnpj"><a href="perfil_aluno.php" class="btn-perfil"><button type="submit">VER MAIS</button></a></td>

            <td class="icone-table">
            <div class="icons">

                    <i class="fa-solid fa-xmark" style="color: #e00000;"></i>

                </div>
            </td>


        </tr>
        <tr class="infos">
            <td class="table-id-empresa">3</td>
            <td class="foto-user">
                <img src="img/bryan.jpg" alt="">
            </td>
            <td class="table-nome-empresa">Ryan Dias Rocha de Souza</td>
            <td class="table-email-empresa">ryan.souza44@etec.sp.gov.br</td>
            <td class="table-cnpj"><a href="perfil_aluno.php" class="btn-perfil"><button>VER MAIS</button></a></td>

            <td class="icone-table">
            <div class="icons">

                    <i class="fa-solid fa-xmark" style="color: #e00000;"></i>

                </div>
            </td>


        </tr>

    </tbody>
</table>
</section>
</div>

    <div class="img-baixo">
        <img src="img/fundo 1.png" alt="">
    </div>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script>
         var filtro = document.getElementById('abrir-filtro')
        function abrirFiltro(){
           if(filtro.style.display == "none"){
            filtro.style.display="block"
            filtro.style.transform="translateY(25px)"
            filtro.style.transition="all 5s"
        }
        else if(filtro.style.display="block"){
        filtro.style.display="none"
    }
    else{
        filtro.style.display="block"
    }
}

    </script>
</body>