<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idAluno'];

if (!($_GET)) {
  $querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
  FROM tb_vaga
  INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idVaga = tb_vaga.idVaga
  INNER JOIN tb_aluno ON tb_aluno.idAluno = tb_vaga_aluno.fk_idAluno
  WHERE tb_aluno.idAluno= '$cliente_id'
  ";
} else if ($_GET['periodo'] == "qualquer" && $_GET['salario'] == "qualquer" && $_GET['area'] == "qualquer" && $_GET['curso'] == "qualquer") {
  $querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
  FROM tb_vaga
  INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idVaga = tb_vaga.idVaga
  INNER JOIN tb_aluno ON tb_aluno.idAluno = tb_vaga_aluno.fk_idAluno
  WHERE tb_aluno.idAluno= '$cliente_id'
  ";
} else {
  $periodo = trim($_GET['periodo']);
  $curso = trim($_GET['curso']);
  $area = trim($_GET['area']);
  $salario = trim($_GET['salario']);
}


$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!--link icone filtro-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../reset.css">
  <link rel="stylesheet" href="../pag-aluno/css/processo-seletivo.css">
  <title>Processos Seletivos</title>

</head>

<body>
  <?php
  include '../pag-aluno/components/header.php';
  ?>
  <main id="main">

    <section class="filtro">
      <div class="container  mt-4" id="contain-filtro">
        <span class="filtro-icon">
          <i class="fa-solid fa-sliders" style="color: #0a3580;"></i>
          <h5>FILTRAR POR :</h5>
        </span>

        <div>
          <form id="barra" method="get">
            <div class="row">
              <div class="col-md-3">
                <select name="periodo" class="form-control">
                  <option value="qualquer">Período</option>
                  <option value="matinal">Manhã</option>
                  <option value="diurno">Tarde</option>
                  <option value="noturno">Noite</option>
                  <option value="integral">integral</option>
                </select>
              </div>
              <div class="col-md-3">
                <select name="salario" class="form-control">
                  <option value="qualquer">Salário</option>
                  <option value="2000">Menos de R$ 2.000</option>
                  <option value="4000">R$ 2.000 - R$ 4.000</option>
                  <option value=6000">Mais de R$ 4.000</option>
                </select>
              </div>
              <div class="col-md-3">
                <select name="area" class="form-control">
                  <option value="qualquer">area</option>
                  <?php foreach ($vagas as $vaga) { ?>
                    <option value=" <?= $vaga['area'] ?> "> <?= $vaga['area'] ?> </option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-3">
                <select name="curso" class="form-control">
                  <option value="qualquer">curso</option>
                  <?php foreach ($curso as $curso) { ?>
                    <option value=" <?= $curso[0] ?> "> <?= $curso[0] ?> </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-1">
              <button type="submit" id="botao-filtro">Filtrar</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <div class="box">

      <?php foreach ($resultado as $resultado) { ?>

        <div id="card">
          <h4 class="local"><?= $resultado[2] ?> - <?= $resultado[3] ?></h4>
          <h4 class="vaga"><?= $resultado[1] ?> - <?= $resultado[10] ?></h4>
          <h4 class="preço">R$ <?= $resultado[5] ?> - <?= $resultado[9] ?></h4>
          <?php $querySelect = "SELECT * FROM tb_vaga_aluno WHERE fk_idAluno = $cliente_id AND fk_idVaga = $resultado[0] AND aprovado = 1";
          $resultado = $conexao->query($querySelect);
          $num = $resultado->fetchALL();
          $qtn = count($num);

          if ($qtn >= 1) { ?>
            <h4 class="aceito">STATUS : ACEITO</h4>
          <?php } else {  ?>
            <h4 class="nao-aceito">STATUS : EM ANDAMENTO</h4>
          <?php } ?>

        </div>


      <?php } ?>


    </div>

  </main>
  <img class="imagem-4" src="./img/icon1.png" alt="">
  <img class="imagem-3" src="./img/icon3.png" alt="">

  <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>