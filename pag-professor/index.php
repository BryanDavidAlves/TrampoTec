<?php
include '../dao/conexao.php';
require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idProfessor'];

$querySelect = "SELECT * FROM  tb_professor WHERE idProfessor = $cliente_id";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();

$querySelect2 = "SELECT nome FROM  tb_etec  ORDER BY nome DESC ";

$query2 = $conexao->query($querySelect2);

$resultado2 = $query2->fetchAll();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/indicacar.css">
    <link rel="stylesheet" href="css/geral.css">
</head>

<body>
    <?php
include '../pag-professor/components/sidebar.php';
?>
    <main class="main">
        <span class="titulo-vagas">Indicaçoes para Alunos</span>
        <img src="" alt="">
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
        <div class="align-filtro" >
            <div class="filtro"  onclick="abrirFiltro()" >
            <span   class="material-symbols-outlined">
                    tune
            </span>


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

                    <select name="" id="">
                    <?php foreach ($resultado2 as $resultado2) {?>
                        <option value="<?=$resultado2[0]?>"><?=$resultado2[0]?></option>
                    <?php }?>
                    </select>
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
        <tr class="infos">
            <th class="text-id" >ID</th>
            <th>USUARIO</th>
            <th>NOME</th>
            <th>EMAIL INSTITUCIONAL</th>
            <th>MENSAGEM</th>

        </tr>
    </thead>
    <tbody>
        <tr class="infos">
           <?php foreach ($resultado as $resultado) {?>

            <td class="table-id-empresa"><?=$resultado[0]?></td>
            <td class="foto-user">
                <img src="fotosProfessor/perfil/<?=$resultado[4]?>" alt="">
            </td>
            <td class="table-nome-empresa"><?=$resultado[1]?></td>
            <td class="table-email-empresa"><?=$resultado[2]?></td>
            <td class="table-cnpj">Oi Clodo, me indica ai </td>
            <?php }?>

            <td class="icone-table">
            <div class="icons">
                    <i id="btn1" class="fa-solid fa-circle-check" style="color: #0c5fed;"></i>
                    <i class="fa-solid fa-xmark" style="color: #e00000;"></i>
                    <dialog id="abrir-indicacao">

<div class="align-card-indicacao">
    <h5 class="title-indicacao">Indicar Aluno</h5>
    <form class="" action="index.php">
        <label for="destinatario">Destinatario</label>
        <input type="email" name="email-professor" id="">
        <br>
        <label for="mensagem">Mensagem</label>
        <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Enviar" class="botao-indicacao">
    </form>
</div>

</dialog>
                </div>
            </td>
        </tr>


    </tbody>
</table>


<dialog id="abrir-indicacao">

      <div class="align-card-indicacao">
          <h5 class="title-indicacao">Indicar Aluno</h5>
          <form class="" action="vagas.php">
              <label for="destinatario">Destinatario</label>
              <input type="email" name="email-professor" id="">
              <br>
              <label for="mensagem">Mensagem</label>
              <textarea name="texto-indicacao" id="" cols="30" rows="10"></textarea>

              <input type="submit" value="Enviar" class="botao-indicacao">
          </form>
      </div>

</dialog>
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
var button1 = document.getElementById("btn1")
            var button2 = document.getElementById("btn2")
            var button3 = document.getElementById("btn3")
            var indicar = document.getElementById('abrir-indicacao')
            var body = document.getElementsByTagName('body')
            button1.onclick = function (){
                indicar.showModal()
            }
            button2.onclick = function (){
                indicar.showModal()
            }
             button3.onclick = function (){
                indicar.showModal()
            }

    </script>
</body>