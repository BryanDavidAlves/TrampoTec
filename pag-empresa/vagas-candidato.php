<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";

$cliente_id = $_SESSION['idEmpresa'];
$idvaga = trim($_GET['idVaga']);


if (isset($_GET) && $_GET['aprovado'] == 1) {
    $status = " AND tb_vaga_aluno.aprovado = 1";
} else if (isset($_GET) && $_GET['aprovado'] == 2) {
    $status = " AND tb_vaga_aluno.aprovado = 2";
} else if (isset($_GET) && $_GET['aprovado'] == 0) {
    $status = " AND tb_vaga_aluno.aprovado = 0";
}

$info = "SELECT tb_vaga.cidade, tb_vaga.area, tb_vaga.periodo, tb_vaga.bairro, tb_vaga.idVaga,
 tb_vaga.nome, tb_vaga.descricao ,  tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso
INNER JOIN tb_empresa
ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa
WHERE tb_vaga.idVaga = $idvaga
";
$result = $conexao->query($info);
$vagas = array();
foreach ($result as $vaga) {
    $vagaId = $vaga['idVaga'];
    if (!isset($vagas[$vagaId])) {
        $vagas[$vagaId] = array(
            'nome' => $vaga['nome'],
            'descricao' => $vaga['descricao'],
            'curso' => $vaga['curso'],

            'salario' => $vaga['salario'],
            'empresa' => $vaga['empresa'],
            'imagem' => $vaga['imagem'],


            'cidade' => $vaga['cidade'],
            'idVaga' => $vaga['idVaga'],
            'bairro' => $vaga['bairro'],
            'area' => $vaga['area'],
            'periodo' => $vaga['periodo'],

        );
    }
}

$querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga
WHERE idVaga ='$idvaga' $status";


$resultado = $conexao->query($querySelect);
$aluno = $resultado->fetchAll();


$querySelect1 = "SELECT * FROM tb_vaga_aluno WHERE aprovado = 1 AND fk_idVaga = $idvaga";
$resultado1 = $conexao->query($querySelect1);
$aluno1 = $resultado1->fetchALL();
$n_aluno1 = count($aluno1);

$querySelect0 = "SELECT * FROM tb_vaga_aluno WHERE aprovado = 0 AND fk_idVaga = $idvaga";
$resultado0 = $conexao->query($querySelect0);
$aluno0 = $resultado0->fetchALL();
$n_aluno0 = count($aluno0);

$querySelect2 = "SELECT * FROM tb_vaga_aluno WHERE aprovado = 2 AND fk_idVaga = $idvaga";
$resultado2 = $conexao->query($querySelect2);
$aluno2 = $resultado2->fetchALL();
$n_aluno2 = count($aluno2);


$querySelect5 = "SELECT email FROM  tb_empresa WHERE idEmpresa = $cliente_id ";
$query6 = $conexao->query($querySelect5);
$emailCandidato = $query6->fetchAll();

foreach ($emailCandidato as $emailCandidato) {
    $email = $emailCandidato[0];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>
    <link rel='stylesheet' href='../pag-empresa/css/candidato-vaga.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>TrampoTec</title>
</head>

<body>

    <?php include '../pag-empresa/componentes/sidebar.php' ?>
    <?php include '../pag-empresa/componentes/email.php' ?>
    <?php include '../pag-empresa/componentes/notificacao.php' ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <section class="voltar-pag">
            <div class="body-voltar">
                <span class="icon-voltar">
                    <a href="./vagas.php"><i class="fa-solid fa-chevron-left"></i></a>
                </span>
                <span>
                    <h1>Voltar</h1>
                </span>
            </div>
        </section>

        <section class="align-itens">
            <div class="card">
                <p>INFORMAÇOES DA VAGA</p>
                <?php foreach ($vagas as $vaga) { ?>

                    <div class="itens-card">
                        <h5>Nome da vaga:</h5><?= $vaga['nome'] ?>
                    </div>
                    <div class="itens-card">
                        <h5>Requisitos:</h5>
                        <?php
                        $selectRequisito = "SELECT tb_requisito_vaga.* , tb_requisito.*
                      FROM  tb_requisito
                      INNER JOIN tb_requisito_vaga ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito WHERE tb_requisito_vaga.fk_idVaga = $vaga[idVaga]
                      ";
                        $query1 = $conexao->query($selectRequisito);
                        $requisito1 = $query1->fetchAll();
                        foreach ($requisito1 as $requisito1) { ?>

                            <?= $requisito1[3] ?> ,

                        <?php } ?>

                    </div>
                    <div class="itens-card">
                        <h5>Descrição da vaga:</h5><?= $vaga['descricao'] ?>
                    </div>
                    <div class="itens-card">
                        <h5>Cursos da vaga:</h5><?= $vaga['curso'] ?>
                    </div>
                    <div class="itens-card">
                        <h5>Salario:</h5><?= $vaga['salario'] ?>
                    </div>
                <?php } ?>
            </div>




            <div class="tabela">

                <div class="align-links">
                    <form method="GET" action="vagas-candidato.php">
                        <input type="hidden" value="1" name="aprovado">
                        <button type="submit" name="idVaga" value="<?= $idvaga ?>">
                            ( <?= $n_aluno1 ?> ) CADASTRADAS
                        </button>
                    </form>
                    <form method="GET" action="vagas-candidato.php?aprovado=0">
                        <input type="hidden" value="0" name="aprovado">
                        <button type="submit" name="idVaga" value="<?= $idvaga ?>">
                            ( <?= $n_aluno0 ?> ) PENDENTES
                        </button>
                    </form>
                    <form method="GET" action="vagas-candidato.php?aprovado=2">

                        <input type="hidden" value="2" name="aprovado">
                        <button type="submit" name="idVaga" value="<?= $idvaga ?>">
                            ( <?= $n_aluno2 ?> ) RECUSADOS
                        </button>
                    </form>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="result">

                        <?php foreach ($aluno as $aluno) { ?>
                            <tr class="infos">
                                <td class="id-aluno">
                                    <?= $aluno[21] ?>
                                </td>
                                <td>
                                    <div class="container-perfil">
                                        <div class="img-perfil">
                                            <img src="../pag-aluno/fotosAluno/perfil/<?= $aluno[34] != "" ? $aluno[34] : ''; ?>" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td class="nome-aluno">
                                    <?= $aluno[24] ?>
                                </td>
                                <td class="email-aluno">
                                    <?= $aluno[22] ?>
                                </td>

                                <?php if (isset($_GET) && $_GET['aprovado'] == 1) { ?>
                                    <td>
                                        <button class="icon-2">
                                            <a href="./beck-end/crudAluno/aluno-deletar.php?idAluno=<?= $aluno[21] ?>&idVaga=<?= $idvaga ?>">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </button>
                                    </td>

                                    <td>
                                        <button value="<?= $aluno[22] ?>" class="icon-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $aluno[21] ?>" data-bs-whatever="@fat">
                                            <i class=" fa-solid fa-envelope"></i>
                                        </button>
                                    </td>

                                    <div class="modal fade" id="exampleModal<?= $aluno[21] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="https://formsubmit.co/<?= $aluno[22] ?>" method="POST">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Entrar em Contato</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--    <input type="hidden" name="_captcha" value="false"> -->
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Para:</label>
                                                            <label><?= $aluno[22] ?></label>
                                                        </div>
                                                        <input type="hidden" name="entre em contato" value=" <?= $email ?>">
                                                        <div class="mb-3">
                                                            <textarea class="form-control" name="message" rows="10" required></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (isset($_GET) && $_GET['aprovado'] == 2) { ?>
                                    <td>
                                        <button class="icon-1">
                                            <a href="./beck-end/crudAluno/aluno-aceitar.php?idAluno=<?= $aluno[21] ?>&idVaga=<?= $idvaga ?>">
                                                <i class="fa-solid fa-check"></i>
                                            </a>
                                        </button>
                                    </td>



                                <?php        } ?>

                                <?php if (isset($_GET) && $_GET['aprovado'] == 0) { ?>

                                    <td>
                                        <button class="icon-1">
                                            <a href="./beck-end/crudAluno/aluno-aceitar.php?idAluno=<?= $aluno[21] ?>&idVaga=<?= $idvaga ?>">
                                                <i class="fa-solid fa-check"></i>
                                            </a>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="icon-2">
                                            <a href="./beck-end/crudAluno/aluno-deletar.php?idAluno=<?= $aluno[21] ?>&idVaga=<?= $idvaga ?>">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </button>
                                    </td>
                                <?php } ?>






                            </tr>

                        <?php } ?>



                    </tbody>
                </table>
            </div>
        </section>




    </main>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>