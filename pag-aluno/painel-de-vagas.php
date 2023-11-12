<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idAluno'];

if (!($_GET)) {
  $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*

    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";

} else if ($_GET['periodo'] == "qualquer" && $_GET['salario'] == "qualquer" && $_GET['area'] == "qualquer" && $_GET['curso'] == "qualquer") {

  $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*
    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";
} else {
  $periodo = trim($_GET['periodo']);
  $curso = trim($_GET['curso']);
  $area = trim($_GET['area']);
  $salario = trim($_GET['salario']);

  $querySelect = "SELECT tb_empresa.*  , tb_telefone_empresa.*, tb_vaga.* , tb_curso.*  , tb_requisito_vaga.*, tb_requisito.*
    FROM tb_empresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_vaga ON tb_vaga.fk_IdEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito WHERE tb_vaga.periodo = '$periodo' OR tb_curso.nome = '$curso'
    OR tb_vaga.area = '$area' OR  tb_vaga.salario BETWEEN 0 AND '$salario'
    ";
}

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../reset.css">
  <link rel="stylesheet" href="./css/painel-de-vagas.css">
  <title>Pagina de Vagas</title>
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
                  <option value="qualquer">Área</option>
                  <option value="ti">TI</option>
                  <option value="saude">Saúde</option>
                  <option value="juridico">Jurídico</option>
                </select>
              </div>
              <div class="col-md-3">
                <select name="curso" class="form-control">
                  <option value="qualquer">Curso</option>
                  <option value="desenvolvimento">desenvolvimento</option>
                  <option value="medicina">Medicina</option>
                  <option value="direito">Direito</option>
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
        <div id="cards">
          <div class="card" id="card">
            <div class="card-content" id="conteudo-card">
              <div id="job-title">
                <?= $resultado[20] ?> - <?= $resultado[21] ?>
              </div>
              <div class="job-description" id="descricao-vaga">
                <p><?= $resultado[19] ?></p>
                <p><?= $resultado[25] ?> as <?= $resultado[26] ?></< /p>
                <p>R$ <?= $resultado[23] ?> </p>


              </div>
              <button type=" button" class="btn btn-primary" id="botao-vaga-modal" data-toggle="modal" data-target=".bd-example-modal-lg<?= $resultado[18] ?>">
                Clique para mais informações
              </button>
            </div>
          </div>
        </div>



        <div class="modal fade bd-example-modal-lg<?= $resultado[18] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-vaga">
              <div class="modal-header" id="modal-cabeaca-footer">
                <h5 class=" modal-title" id="exampleModalLabel"></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" id="botao-fechar">
                  <span aria-hidden="true"> <i class="fa-solid fa-xmark" style="color: #ff0000;"></i></span>
                </button>
              </div>
              <div class="modal-body">
                <section id="info-empresa">
                  <div id="infos-vaga-modal">
                    <div id="div-img-modal">
                      <img class="img-modal" src="../pag-empresa/fotosEmpresa/perfil/<?= $resultado[13] ?>">
                    </div>
                    <div id="sobre-empresa">
                      <span id="info-titulo">
                        <?= $resultado[3] ?>
                      </span>
                      <span id="info-nome">
                        <?= $resultado[4] ?>
                      </span>
                      <span id="info-ano">
                        <?= $resultado[7] ?>
                      </span>
                    </div>
                  </div>
                  <div id="container-infos">
                    <div id="infos-vaga-requisito">
                      <span id="titulo2">CONHECIMENTOS :</span>
                      <div id="requisitos-vaga">
                        <span>
                          <?= $resultado[41] ?>
                        </span>
                        <span>
                          <?= $resultado[41] ?>
                        </span>
                        <span>
                          <?= $resultado[41] ?>
                        </span>
                      </div>
                    </div>
                    <div id="descrição-vaga">
                      <p id="texto-descs">
                        <?= $resultado[24] ?>
                      </p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="modal-footer" id="modal-footer">
                <form action="./back-end/salvarCandidato/salvar-candidato.php" method="POST">
                  <input type="hidden" id="idVaga" name="idVaga" value="<?= $resultado[18] ?>">
                  <button name="bnt" id="botao-candidatar" type="submit" value="<?= $cliente_id ?>" class="btn btn-primary" style="align-items: center;" onclick="openModal()">CANDIDATAR-SE</button>
                </form>
              </div>
            </div>
          </div>
        </div>




      <?php } ?>






  </main>

  <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>