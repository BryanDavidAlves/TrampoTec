<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idAluno'];

if (!($_GET) || $_GET['periodo'] == "qualquer" && $_GET['salario'] == "qualquer" && $_GET['area'] == "qualquer" && $_GET['curso'] == "qualquer") {
    $querySelect = "SELECT tb_empresa.nome AS nomeEmpresa, tb_empresa.email,tb_empresa.descricao AS descEmpresa , tb_empresa.departamento , tb_empresa.anoFundacao, tb_empresa.cnpj, tb_empresa.cep, tb_empresa.logradouro , tb_empresa.numero ,
  tb_empresa.estado , tb_empresa.bairro , tb_empresa.imagem , tb_telefone_empresa.numeroTelefone , tb_vaga.idVaga , tb_vaga.nome , tb_vaga.cidade , tb_vaga.bairro AS bairroVaga , tb_vaga.salario ,
  tb_vaga.descricao , tb_vaga.inicio , tb_vaga.termino , tb_vaga.periodo , tb_vaga.area , tb_curso.nome AS cursoNome , tb_requisito.requisito
    FROM tb_vaga
    INNER JOIN tb_empresa ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito
";
}else {
    $periodo = trim($_GET['periodo']);
    $curso = trim($_GET['curso']);
    $area = trim($_GET['area']);
    $salario = trim($_GET['salario']);

    $querySelect = "SELECT tb_empresa.nome AS nomeEmpresa, tb_empresa.email,tb_empresa.descricao AS descEmpresa , tb_empresa.departamento , tb_empresa.anoFundacao, tb_empresa.cnpj, tb_empresa.cep, tb_empresa.logradouro , tb_empresa.numero ,
  tb_empresa.estado , tb_empresa.bairro , tb_empresa.imagem , tb_telefone_empresa.numeroTelefone , tb_vaga.idVaga , tb_vaga.nome , tb_vaga.cidade , tb_vaga.bairro AS bairroVaga , tb_vaga.salario ,
  tb_vaga.descricao , tb_vaga.inicio , tb_vaga.termino , tb_vaga.periodo , tb_vaga.area , tb_curso.nome AS cursoNome , tb_requisito.requisito
    FROM tb_vaga
    INNER JOIN tb_empresa ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_telefone_empresa ON tb_telefone_empresa.fk_idEmpresa = tb_empresa.idEmpresa
    INNER JOIN tb_curso ON tb_curso.idCurso = tb_vaga.fk_idCurso
    INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idVaga = tb_vaga.idVaga
    INNER JOIN tb_requisito ON tb_requisito.idRequisito = tb_requisito_vaga.fk_idRequisito WHERE tb_vaga.periodo = '$periodo' OR tb_curso.nome = '$curso'
    OR tb_vaga.area = '$area' OR  tb_vaga.salario BETWEEN 0 AND '$salario'
";
}

$result = $conexao->query($querySelect);
$vagas = array();
foreach ($result as $vaga) {
    $vagaId = $vaga['idVaga'];
    if (!isset($vagas[$vagaId])) {
        $vagas[$vagaId] = array(
            'nomeEmpresa' => $vaga['nomeEmpresa'],
            'email' => $vaga['email'],
            'departamento' => $vaga['departamento'],
            'anoFundacao' => $vaga['anoFundacao'],
            'cnpj' => $vaga['cnpj'],
            'cep' => $vaga['cep'],
            'logradouro' => $vaga['logradouro'],
            'numero' => $vaga['numero'],
            'estado' => $vaga['estado'],
            'bairro' => $vaga['bairro'],
            'imagem' => $vaga['imagem'],
            'numeroTelefone' => $vaga['numeroTelefone'],
            'idVaga' => $vaga['idVaga'],
            'nome' => $vaga['nome'],
            'cidade' => $vaga['cidade'],
            'bairroVaga' => $vaga['bairroVaga'],
            'salario' => $vaga['salario'],
            'descricao' => $vaga['descricao'],
            'descEmpresa' => $vaga['descEmpresa'],
            'requisito' => $vaga['requisito'],
            'area' => $vaga['area'],
            'periodo' => $vaga['periodo'],
            'termino' => $vaga['termino'],
            'inicio' => $vaga['inicio'],
            'cursoNome' => $vaga['cursoNome'],
        );
    }
}

$selectCurso = "SELECT nome FROM  tb_curso";
$query = $conexao->query($selectCurso);
$curso = $query->fetchAll();

$queryAreas = "SELECT DISTINCT tb_vaga.area FROM tb_vaga";
$resultAreas = $conexao->query($queryAreas);
$areas = $resultAreas->fetchAll(PDO::FETCH_ASSOC);
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

  <img class="imagem-1" src="./img/12.png" alt="">
  <img class="imagem-2" src="./img/11.png" alt="">



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
                  <option value="6000">Mais de R$ 4.000</option>
                </select>
              </div>
              <div class="col-md-3">
                <select name="area" class="form-control">
                  <option value="qualquer">Área</option>
                  <?php foreach ($areas as $areaOpcao) {?>
                    <option value="<?=$areaOpcao['area']?>"><?=$areaOpcao['area']?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-md-3">
                <select name="curso" class="form-control">
                  <option value="qualquer">curso</option>
                  <?php foreach ($curso as $curso) {?>
                    <option value=" <?=$curso[0]?> "> <?=$curso[0]?> </option>
                  <?php }?>
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

    <?php if (count($vagas) == 0) {?>
        <div class="box">
          <p>Não foram encontradas vagas com os critérios de filtragem selecionados.</p>
        </div>
      <?php } else {?>

      <?php foreach ($vagas as $vaga) {?>
        <div id="cards">
          <div class="card" id="card">
            <div class="card-content" id="conteudo-card">
              <div id="job-title">
                <?=$vaga['cidade']?> - <?=$vaga['bairroVaga']?>
              </div>
              <div class="job-description" id="descricao-vaga">
                <p><?=$vaga['nome']?></p>
                <p><?=$vaga['inicio']?> as <?=$vaga['termino']?></< /p>
                <p>R$ <?=$vaga['salario']?> </p>


              </div>
              <button type=" button" class="btn btn-primary" id="botao-vaga-modal" data-toggle="modal" data-target=".bd-example-modal-lg<?=$vaga['idVaga']?>">
                Clique para mais informações
              </button>
            </div>
          </div>
        </div>
        <div class="modal fade bd-example-modal-lg<?=$vaga['idVaga']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                      <img class="img-modal" src="../pag-empresa/fotosEmpresa/perfil/<?=$vaga['imagem']?>">
                    </div>
                    <div id="sobre-empresa">
                      <span id="info-titulo">
                        <?=$vaga['nomeEmpresa']?>
                      </span>
                      <span id="info-nome">
                        <?=$vaga['departamento']?>
                      </span>
                      <span id="info-ano">
                        <?=$vaga['anoFundacao']?>
                      </span>
                    </div>
                  </div>
                  <div id="container-infos">
                    <div id="infos-vaga-requisito">
                      <span id="titulo2">CONHECIMENTOS :</span>
                      <div id="requisitos-vaga">
                        <?php
$selectRequisito = "SELECT tb_requisito_vaga.* , tb_requisito.*
                      FROM  tb_requisito
                      INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito WHERE tb_requisito_vaga.fk_idVaga = $vaga[idVaga]
                      ";
    $query1 = $conexao->query($selectRequisito);
    $requisito1 = $query1->fetchAll();
    foreach ($requisito1 as $requisito1) {?>
                          <span>
                            <?=$requisito1[3]?>
                          </span>
                        <?php }?>

                      </div>
                    </div>
                    <div id="descrição-vaga">
                      <p id="texto-descs">
                        <?=$vaga['descricao']?>
                      </p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="modal-footer" id="modal-footer">
                <form action="./back-end/salvarCandidato/salvar-candidato.php" method="POST">
                  <input type="hidden" id="idVaga" name="idVaga" value="<?=$vaga['idVaga']?>">
                  <button name="bnt" id="botao-candidatar" type="submit" value="<?=$cliente_id?>" class="btn btn-primary" style="align-items: center;" onclick="openModal()">CANDIDATAR-SE</button>
                </form>
              </div>
            </div>
          </div>
        </div>




      <?php }?>


      <?php } ?>









  </main>
  <img class="imagem-3" src="./img/10.png" alt="">
  <img class="imagem-4" src="./img/9.png" alt="">
  <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>