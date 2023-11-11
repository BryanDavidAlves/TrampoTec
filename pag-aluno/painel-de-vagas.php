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
    <!--link icone filtro-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <title>Pagina de Vagas</title>
    <style>
            body {
        font-family: sans-serif;
      }
    .container {
      margin-top: 30px;
    }

    .table {
      margin-top: 20px;
    }

    select {
      width: 100%;
    }

    h5 {
        text-align: center;
       font-weight: bold;
       margin-top: 5%;

    }
.services .icon-box {
    margin-top: 17%;
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  background: #fff;
}

.services .icon-box .icon {
  margin-bottom: 10px;
}

.services .icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}

.services .icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #37517e;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  transform: translateY(-10px);
}

.services .icon-box:hover h4 a {
  color: #47b2e4;
}
.div-img-modal {
    width: 150px;
    height: 150px;
    border-radius: 10%;
    border: 3px solid #0a3580;
    margin-left: 5%;
    margin-top: 3%;

}

.img-modal {
    border-radius: 10%;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.info-empresa{
  display: flex;
  justify-content: space-between;
  width: 90%;
}
p{
  font-size: 20px;
}


  </style>
</head>

<body>
    <?php
include '../pag-aluno/components/header.php';

?>

    <main id="main">

        <div class="box">

            <!-- <div class="control">-->

            <section class="filtro">

            <div class="container mt-4">
  <h5>Filtre por:</h5>

  <div class="row" style="margin-top: 2%;">
    <div class="col-md-3">
      <select id="periodo" class="form-control">
        <option value="">Período</option>
        <option value="manha">Manhã</option>
        <option value="tarde">Tarde</option>
        <option value="noite">Noite</option>
      </select>
    </div>
    <div class="col-md-3">
      <select id="curso" class="form-control">
        <option value="">Curso</option>
        <option value="engenharia">Engenharia</option>
        <option value="medicina">Medicina</option>
        <option value="direito">Direito</option>
      </select>
    </div>
    <div class="col-md-3">
      <select id="area" class="form-control">
        <option value="">Área</option>
        <option value="ti">TI</option>
        <option value="saude">Saúde</option>
        <option value="juridico">Jurídico</option>
      </select>
    </div>
    <div class="col-md-3">
      <select id="salario" class="form-control">
        <option value="">Salário</option>
        <option value="menos-de-2000">Menos de R$ 2.000</option>
        <option value="2000-4000">R$ 2.000 - R$ 4.000</option>
        <option value="mais-de-4000">Mais de R$ 4.000</option>
      </select>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-primary btn-block">Filtrar</button>
      </div>
  </div>
</div>
 </section>
            <!-- <section class="container">

                <section class="perfil">
                    <div class="div-img">
                        <img src="img/aluno-form.png" alt="">
                    </div>
                    <a href="perfil.php">PERFIL</a>
                </section> -->


                    <section id="services" class="services section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                        <h2>Painel de vagas</h2>

                        </div>



                        <div class="row">

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="icon-box">
                            <?php foreach ($resultado as $resultado) {?>
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href=""><?=$resultado[23]?> -
                                <?=$resultado[9]?></a></h4>
                            <p><?=$resultado[24]?></p>
                            <p><?=$resultado[25]?></p>
                            <p>R$<?=$resultado[26]?></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 10%;">
                            Clique para mais informações
                            </button>
                            </div>
                        </div>
                    </div>
                    </section>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
                        <form action="./back-end/salvarCandidato/salvar-candidato.php" method="POST" >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Descrição de vaga</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <section class="info-empresa">
                                        <div class="div-img-modal">
                                            <a><img class="img-modal"
                                                    src="../pag-empresa/fotosEmpresa/perfil/<?=$resultado[10]?>"></a>
                                        </div>
                                        <div class="sobre-empresa">
                                            <p> <div style="font-weight: bold; font-size:20px ;"> Empresa: </div>
                                                <?=$resultado[3]?>
                            </p><br>
                                            <p> <div style="font-weight: bold; font-size:20px ;">Departamento: </div>
                                                <?=$resultado[13]?>
                            </p><br>
                                            <p> <div style="font-weight: bold; font-size:20px ;">Desde: </div>
                                                <?=$resultado[15]?>
                            </p><br>
                                            <p><div style="font-weight: bold; font-size:20px ;">Conhecimentos: </div>

                                                <li>JAVA</li>
                                                <li>PHP</li>
                                                <li>HTML</li>
                            </p><br>

                                            <p>
                                                <?=$resultado[31]?>
                                            </p><br>

                                                <p>
                                                    <?=$resultado[27]?>
                                                </p><br>

                                        </section>
                                    </div>

                              <div class="modal-footer">
                              <input type="hidden" id="idVaga" name="idVaga" value="<?=$resultado[18]?>">
                                    <button name="bnt" id="btn" type="submit" value="<?=$cliente_id?>"class="btn btn-primary" style="align-items: center;" onclick="openModal()">CANDIDATAR-SE</button>
                                </form>
                              </div>

                            </div>
                            </div>

                          </div>
                <?php }?>



                    </div>
                </section>




    </main>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script>
        var btn = document.getElementById('btn')


        var button1 = document.getElementById("btn1")
        var button2 = document.getElementById("btn2")
        var button3 = document.getElementById("btn3")
        var modal = document.getElementById("modal")

        button1.onclick = function() {
            modal.showModal()
        }
        button2.onclick = function() {
            modal.showModal()
        }
        button3.onclick = function() {
            modal.showModal()
        }
    </script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function() {
            modal.close()
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>