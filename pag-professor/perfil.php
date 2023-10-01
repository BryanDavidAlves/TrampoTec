<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

// Pega o ID do cliente logado
$cliente_id = $_SESSION['idProfessor'];

$querySelect = "SELECT * FROM  tb_professor WHERE idProfessor = $cliente_id";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();

?>
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
    <?php foreach ($resultado as $resultado) {?>
        <div class="align-button-info" id="btn1"><i id="icon-info"  class="fa-solid fa-plus" style="color: #ffffff;">
            </i><h2>Editar Perfil</h2>
        </div>
<div class="fundo-dialog">
<dialog id="abrir-indicacao">

      <div class="align-card-indicacao" id="dialog">

          <form class="" action="perfil.php">
              <label for="destinatario">NOME</label>
              <input type="text" name="nome" id="" placeholder="<?=$resultado[1]?>">

              <label for="mensagem">EMAIL</label>
              <input type="text" name="email" id="" placeholder="<?=$resultado[2]?>">

              <label for="mensagem">SENHA</label>
              <input type="text" name="nova-senha" id="" placeholder="<?=$resultado[3]?>">

              <label for="mensagem">CONFIRMAR NOVA SENHA</label>
              <input type="text" name="nova-senha" id="" placeholder="Repetir Nova  Senha">

              <input type="submit" value="EDITAR" class="botao-indicacao">
          </form>
      </div>

</dialog>
</div>
    <div class="alinhar-perfil">
        <div class="imagem-perfil">

            <img src="fotosProfessor/perfil/<?=$resultado[4]?>" alt="Foto de perfil">
        </div>


            <h3 class="informacao-usuario">Nome</h3>
            <h4 class="nome-usuario" ><?=$resultado[1]?></h4>

            <h3 class="informacao-usuario">Email</h3>
            <h4 class="nome-usuario"><?=$resultado[2]?></h4>
            <?php }?>
            <h3 class="informacao-usuario">Curso</h3>
            <h4 class="nome-usuario">Desenvolvimento de Sistemas</h4>
    </div>
    </section>

    <div class="img-baixo">
        <img src="img/fundo 1.png" alt="">
    </div>

    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
    <script>



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
</html>
