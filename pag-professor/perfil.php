<?php
include '../dao/conexao.php';
require_once "./back-end/login/validador_acesso.php";
// Pega o ID do cliente logado
$cliente_id = $_SESSION['idProfessor'];

$querySelect = "SELECT pro.imagem, pro.nome, pro.email, cur.nome, pro.senha FROM  tb_professor pro
LEFT JOIN tb_curso AS cur ON cur.idCurso=pro.fk_idCurso
WHERE idProfessor = '$cliente_id'
";

$querySelect2 = "SELECT nome FROM tb_curso";

$query2 = $conexao->query($querySelect2);

$resultado2 = $query2->fetchAll();
/*
$querySelect = "SELECT tb_professor.* , tb_curso.*
FROM tb_professor
INNER JOIN tb_curso ON tb_curso.idCurso = tb_professor.idProfessor

WHERE tb_professor.idProfessor = '$cliente_id'
";
 *
 */
$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();

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

        <div class="align-button-info" id="btn1"><i id="icon-info"  class="fa-solid fa-plus" style="color: #ffffff;">
            </i><h2>Editar Perfil</h2>
        </div>
<div class="fundo-dialog">
<dialog id="abrir-indicacao">

      <div class="align-card-indicacao" id="dialog">
        <div class="fechar-indicacao" id="btn3">
        <i class="fa-solid fa-xmark"  ></i>
        </div>

          <form class="" action="./back-end/alterar/update.php" method="post" >

          <?php foreach ($resultado as $resultado) {?>
            <label for="destinatario">IMAGEM DE PERFIL</label>
            <div class="imagem-perfil-update">


            <label class="font-weight-bold"  for="foto" id="label-file"> TROQUE SUA IMAGEM CLICANDO AQUI
            <input type="hidden" id="foto_usuario" name="foto" accept="image/*"   enctype="multipart/form-data"  value="<?=$resultado[0]?>">
            <input class="form-control obrigatorio" type="file"  id="foto"  value="<?=$resultado[0]?>"
             name="foto_usuario" >
        </div>

              <label for="destinatario">NOME</label>
              <input type="text" name="nome" id="" value="<?=$resultado[1]?>" placeholder="<?=$resultado[1]?>">

              <label for="mensagem">EMAIL</label>
              <input type="text" name="email" id="" value="<?=$resultado[2]?>" placeholder="<?=$resultado[2]?>">

              <label for="mensagem">SENHA</label>
              <input type="text" name="senha" id="" value="<?=$resultado[4]?>" placeholder="<?=$resultado[4]?>">

              <label for="mensagem">CURSO</label>

              <select  id="" value="">
              <?php foreach ($resultado2 as $resultado2) {?>

              <option name="" value="<?=$resultado2[0]?>"><?=$resultado2[0]?></option>
              <?php }?>

              </select>

            <button type="submit"  class="botao-indicacao"   value="<?=$cliente_id?>" name="id">EDITAR</button>
          </form>
      </div>

</dialog>
</div>
    <div class="alinhar-perfil">
        <div class="imagem-perfil">

            <img src="fotosProfessor/perfil/<?=$resultado[0] != "" ? $resultado[0] : '';?>"" alt="Foto de perfil" >
        </div>


            <h3 class="informacao-usuario">Nome</h3>
            <h4 class="nome-usuario" ><?=$resultado[1]?></h4>

            <h3 class="informacao-usuario">Email</h3>
            <h4 class="nome-usuario"><?=$resultado[2]?></h4>

            <h3 class="informacao-usuario">Curso</h3>

            <h4 class="nome-usuario"  > <?=$resultado[3]?></h4>
            <?php }?>
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
            var fechar = document.getElementById("btn-fechar")
            var indicar = document.getElementById('abrir-indicacao')
            var body = document.getElementsByTagName('body')
            button1.onclick = function (){
                indicar.showModal()
            }

             button3.onclick = function (){
                indicar.close()
            }






    </script>
</body>
</html>
